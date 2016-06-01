<?php

namespace UserBundle\Controller;

use Extra\ApiClient;
use ApiLogsBundle\Entity\UserTableLog;
use Extra\DateTimeProvider;
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
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please provide a valid email address';
        }

        if (!$password = $data['password']) {
            $errors[] = '"password" is required';
        }

        if (!$username = $data['username']) {
            $errors[] = '"username" is required';
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

        // ensure that we don't already have this user
        if ($existingUser = $userRepository->findUserByEmail($email)) {
            $errors[] = 'A user with this email already exists';
        }

        // ensure that we don't already have this user
        if ($existingUser = $userRepository->findUserByUsername($username)) {
            $errors[] = 'A user with this username already exists';
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
            $responseMessage = 'User successfully created';
        } else {
            $responseMessage = 'There were some issues creating the account';
        }

        $response = [
            'errors' => $errors,
            'message' => $responseMessage,
        ];

        return new JsonResponse($response);
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
     * @Route("/users/{username}")
     * @Method("GET")
     */
    public function showUserAction($username) {
        $user = $this->findUserByUsername($username);
        
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
    
    /**
     * @param $username
     * @return User
     */
    public function findUserByUsername($username)
    {
        return $this->getUserRepository()->findUserByUsername($username);
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

        $username = $data['username'];
        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            
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
        } else {
            $response = [
                'message' => "Oops, something went wrong", // User probably needs to provide username
                'status' => 'error'
            ];
        }
        
        return new JsonResponse($response);
    }
    
    /**
     * @Route("/tokens")
     * @Method("POST")
     */
    public function newTokenAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $username = $data['username'];
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


}
