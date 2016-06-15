<?php

namespace BusBundle\Controller;

use ApiLogsBundle\Entity\BusTableLog;
use BusBundle\Entity\Bus;
use BusBundle\Repository\BusRepository;
use Extra\DateTimeProvider;
use Extra\ApiClient;
use Extra\ResponseFactory;
use Extra\ApiProblem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BusController extends Controller
{
    /**
     * @Route("/buses/{id}")
     * @Method("PUT")
     */
    public function editBusAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $seats = $data['seats'];
        $busType = $data['busType'];
        $busRegistration = $data['busRegistration'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            $em = $this->getDoctrine()->getManager();

            $busEntity = $this->getDoctrine()
                ->getRepository('BusBundle:Bus')
                ->find($id);

            $originalBus = $busEntity->getBusRegistration();

            $busEntity->setBusType($busType);
            $busEntity->setSeats($seats);
            $busEntity->setBusRegistration($busRegistration);
            $busEntity->setUpdated(DateTimeProvider::getNow());

            $busTableLogEntity = new BusTableLog();
            $busTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busTableLogEntity->setAction("Edited: $originalBus: *NEW_DATA--> Bus Registration = $busRegistration, Bus Type = $busType, Seats = $seats");
            $busTableLogEntity->setUser($username);
            $busTableLogEntity->setClientIP($request->getClientIp());

            $em->merge($busEntity);
            $em->persist($busTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Bus Successfully updated',
                'status' => 'success'
            ];
        } else {
            $response = [
                'message' => 'Insufficient permissions',
                'status' => 'Error'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/buses")
     * @Method("POST")
     */
    public function createBusAction(Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');

        $data = json_decode($request->getContent(), true);
        $errors = [];
        $busRepository = $this->getBusRepository();
        
        if (!$seats = $data['numberOfSeats']) {
            $errors[] = "'Number Of Seats' is required";
        }
        if (!$busType = $data['busType']) {
            $errors[] = "'Bus Type' is required";
        }
        
        if (!$busRegistration = $data['busRegistration']) {
            $errors[] = "'Bus Registration' is required";
        }
        
        if (!$username = $data['username']) {
            $errors[] = "'Username' is required";
        } else {
            if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
                
                if ($busRegistration = $busRepository->findOneByBusRegistration($busRegistration)) {
                    $response = [
                        'message' => $data['busRegistration'] . " already exists."
                    ];
                    $status = 400;

                    return new JsonResponse($response, $status);
                } else {
                    $busEntity = new Bus();

                    $busEntity->setSeats($seats);
                    $busEntity->setBusRegistration($data['busRegistration']);
                    $busEntity->setBusType($busType);
                    $busEntity->setCreated(DateTimeProvider::getNow());
                    $busEntity->setUpdated(DateTimeProvider::getNow());

                    $busTableLogEntity = new BusTableLog();
                    $busTableLogEntity->setCreated(DateTimeProvider::getNow());
                    $busTableLogEntity->setAction("Added " . $data['busRegistration']);
                    $busTableLogEntity->setUser($username);
                    $busTableLogEntity->setClientIP($request->getClientIp());

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($busEntity);
                    $em->persist($busTableLogEntity);
                    $em->flush();

                    $response = [
                        'message' => $busRegistration . " successfully added to the bus list."
                    ];

                    return new JsonResponse($response, 200);   
                }
            } else {
                if (!ApiClient::hasAdminCredentialsForJSONRequest($username)) {
                    $responseFactory = new ResponseFactory();
                    $apiProblem = new ApiProblem(403);
                    $apiProblem->set('detail', 'Access denied');

                    return $responseFactory->createResponse($apiProblem);
                }

                if (count($errors) != 0) {
                    $response = [
                        'message' => 'There were some issues creating the Bus Type',
                        'errors' => $errors
                    ];
                    return new JsonResponse($response, 400);
                }
            }
        }
    }

    /**
     * @Route("/buses")
     * @Method("GET")
     */
    public function listBusAction(Request $request)
    {
        $buses = $this->getBusRepository()->findAll();

        $response = [];

        foreach ($buses as $bus) {
            $response[] = [
                'id' => $bus->getId(),
                'seats' => $bus->getSeats(),
                'busRegistration' => $bus->getBusRegistration(),
                'busType' => $bus->getBusType(),
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @return BusRepository
     */
    public function getBusRepository()
    {
        return $this->getDoctrine()
            ->getRepository("BusBundle:Bus");
    }

    /**
     * @Route("/buses/{id}")
     * @Method("DELETE")
     */
    public function deleteBusAction($id, Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');
        $em = $this->getDoctrine()->getManager();
        if ($bus = $this->getBusRepository()->find($id)) {

            $busRegistration = $bus->getBusRegistration();

            $busTableLogEntity = new BusTableLog();
            $busTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busTableLogEntity->setAction("Removed $busRegistration");
            $busTableLogEntity->setUser('awesome_admin');
            $busTableLogEntity->setClientIP($request->getClientIp());

            $em->remove($bus);
            $em->persist($busTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Successfully removed item.'
            ];

            return new JsonResponse($response, 200);
        }
        
        $responseFactory = new ResponseFactory();
        $apiProblem = new ApiProblem(404);
        $apiProblem->set('detail', 'Resource not found');

        return $responseFactory->createResponse($apiProblem);

    }
}
