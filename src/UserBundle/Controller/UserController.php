<?php

namespace UserBundle\Controller;

use ApiLogsBundle\Entity\UserTableLog;
use Extra\ApiProblem;
use Extra\DateTimeProvider;
use Extra\ResponseFactory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use UserBundle\Entity\User;
use UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserController extends Controller
{
    /**
     * @Route("/users")
     * @Method("POST")
     */
    public function registerUserAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $userRepository = $this->getUserRepository();
        $errors = array();

        if (!$email = $data['email']) {
            $errors[] = '"email" is required';
        } else {
            // ensure that we don't already have this user
            if ($existingUser = $userRepository->findUserByEmail($email)) {
                $errors[] = 'A user with this email already exists';
            }
        }

        if (!$password = $data['password']) {
            $errors[] = '"password" is required';
        }

        if (!$username = $data['username']) {
            $errors[] = '"username" is required';
        } else {
            // ensure that we don't already have this user
            if ($existingUser = $userRepository->findUserByUsername($username)) {
                $errors[] = 'A user with this username already exists';
            }
        }

        if (!$firstName = $data['firstName']) {
            $errors[] = '"first name" is required';
        }

        if (!$lastName = $data['lastName']) {
            $errors[] = '"last name" is required';
        }

        if (!$gender = $data['gender']) {
            $errors[] = '"gender" is required';
        }

        if (count($errors) === 0) {
            $user = new User();
            $user->setEmail($email);
            $user->setCreated(DateTimeProvider::getNow());
            $user->setUpdated(DateTimeProvider::getNow());
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setGender($gender);
            $user->setUsername($username);

            $encodedPassword = $this->container->get('security.password_encoder')
                ->encodePassword($user, $password);

            $user->setPassword($encodedPassword);

            $userTableLogEntity = new UserTableLog();
            $userTableLogEntity->setCreated(DateTimeProvider::getNow());
            $userTableLogEntity->setClientIP($request->getClientIp());
            $userTableLogEntity->setAction("$username registered account");

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->persist($userTableLogEntity);
            $em->flush();

            $this->loginUser($user);
            
            $response = ['message' => 'User successfully created'];
            return new JsonResponse($response, 200);
        } else {
            $response = [
                'message' => 'There were some issues creating the account',
                'errors' => $errors
            ];
            return new JsonResponse($response, 400);
        }
    }

    /**
     * Determine if the current user is logged in or not
     *
     * @return boolean
     */
    public function isUserLoggedIn()
    {
        return $this->container->get('security.authorization_checker')
            ->isGranted('IS_AUTHENTICATED_FULLY');
    }

    public function loginUser(User $user)
    {
        $token = new UsernamePasswordToken($user, $user->getPassword(), 'main', $user->getRoles());

        $this->container->get('security.token_storage')->setToken($token);
    }

    /**
     * @Route("/users")
     * @Method("GET")
     */
    public function listUsersAction(Request $request)
    {
        $users = $this->getUserRepository()->findAll();

        $response = [];

        foreach ($users as $user)
        {
            $response[] = [
                'username' => $user->getUsername(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
                'created' => $user->getCreated(),
                'gender' => $user->getGender(),
                'id' => $user->getId()
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/users/{username}")
     * @Method("GET")
     */
    public function showUserAction(Request $request)
    {
        $username = $request->attributes->get('username');
        $userRepository = $this->getUserRepository();

        if ($user = $userRepository->findUserByUsername($username)) {
            $response = [
                'username' => $user->getUsername(),
                'created' => $user->getCreated(),
                'updated' => $user->getUpdated(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
                'gender' => $user->getGender()
            ];

            return new JsonResponse($response);
        }

        // If we don't find the user the API will return a 404
        $responseFactory = new ResponseFactory();
        $apiProblem = new ApiProblem(404);
        $apiProblem->set('detail', "User Not Found");

        return $responseFactory->createResponse($apiProblem);
    }


    /**
     * @return UserRepository
     */
    public function getUserRepository()
    {
        return $this->getDoctrine()
            ->getRepository("UserBundle:User");
    }

    /**
     * @Route("/logout")
     * @Method("POST")
     */
    public function logoutAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['username'])) {
            $username = $data['username'];
        } else {
            // If we don't find the user the API will return a 404
            $responseFactory = new ResponseFactory();
            $apiProblem = new ApiProblem(400);
            $apiProblem->set('detail', "Bad Request :: No username provided");
            
            return $responseFactory->createResponse($apiProblem);
        }

        $userLogTableEntity = new UserTableLog();
        $userLogTableEntity->setAction("$username logged out");
        $userLogTableEntity->setCreated(DateTimeProvider::getNow());
        $userLogTableEntity->setClientIP($request->getClientIp());

        $em = $this->getDoctrine()->getManager();
        $em->persist($userLogTableEntity);
        $em->flush();

        $response = [
            'message' => $username . " successfully logged out."
        ];


        return new JsonResponse($response);
    }

    /**
     * @Route("/tokens")
     * @Method("POST")
     */
    public function newTokenAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['username'])) {
            $username = $data['username'];
        } else {
            $username = "";
        }

        $password = $data['password'];

        $userLogTableEntity = new UserTableLog();

        $user = $this->getUserRepository()
            ->findOneBy(['username' => $username]);

        if (!$user) {
            throw $this->createNotFoundException();

        }

        $isValid = $this->get('security.password_encoder')
            ->isPasswordValid($user, $password);

        if (!$isValid) {
            throw new BadCredentialsException();
        }

        $token = $this->get('lexik_jwt_authentication.jwt_encoder')
            ->encode(['username' => $user->getUsername()]);

        $response = [
            'token' => $token,
            'message' => 'Logged in as ' . $username
        ];

        $userLogTableEntity->setAction("$username logged in");
        $userLogTableEntity->setCreated(DateTimeProvider::getNow());
        $userLogTableEntity->setClientIP($request->getClientIp());

        $em = $this->getDoctrine()->getManager();
        $em->persist($userLogTableEntity);
        $em->flush();

        $this->loginUser($user);

        return new JsonResponse($response);

    }
    
    /**
     * @Route("/users/{id}")
     * @Method("DELETE")
     */
    public function deleteUserAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($user = $this->getUserRepository()->find($id)) {
            $userToBeRemoved = $user->getUsername();

            if (strcmp($userToBeRemoved, 'awesome_admin') === 0) {
                $responseFactory = new ResponseFactory();
                $apiProblem = new ApiProblem(403);
                $apiProblem->set('detail', 'This user is too awesome to be removed!');

                return $responseFactory->createResponse($apiProblem);
            } else {

                $userTableLogEntity = new UserTableLog();
                $userTableLogEntity->setAction("awesome_admin Removed $userToBeRemoved");
                $userTableLogEntity->setCreated(DateTimeProvider::getNow());
                $userTableLogEntity->setClientIP($request->getClientIp());

                $em->remove($user);
                $em->persist($userTableLogEntity);
                $em->flush();

                $response = [
                    'message' => 'Successfully removed item.',
                ];

                return new JsonResponse($response, 200);
            }
        } else {
            $responseFactory = new ResponseFactory();
            $apiProblem = new ApiProblem(404);
            $apiProblem->set('detail', 'Resource not found');

            return $responseFactory->createResponse($apiProblem);
        }
    }
}
