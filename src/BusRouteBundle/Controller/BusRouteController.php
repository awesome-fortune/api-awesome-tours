<?php

namespace BusRouteBundle\Controller;

use ApiLogsBundle\Entity\BusRouteTableLog;
use BusRouteBundle\Entity\BusRoute;
use BusRouteBundle\Repository\BusRouteRepository;
use Extra\ApiClient;
use Extra\DateTimeProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Extra\ApiProblem;
use Extra\ResponseFactory;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class BusRouteController extends Controller
{

    /**
     * @Route("bus-routes/{id}")
     * Method("PUT")
     */
    public function editBusRouteAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $departureLocation = $data['departureLocation'];
        $destination = $data['destination'];
        $routeName = $data['routeName'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            $em = $this->getDoctrine()->getManager();

            $busRouteEntity = $this->getBusRouteRepository()->find($id);

            $originalBusRoute = $busRouteEntity->getRouteName();

            $busRouteEntity->setDepartureLocation($departureLocation);
            $busRouteEntity->setDestination($destination);
            $busRouteEntity->setUpdated(DateTimeProvider::getNow());
            $busRouteEntity->setRouteName($routeName);

            $busRouteTableLogEntity = new BusRouteTableLog();
            $busRouteTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busRouteTableLogEntity->setUser($username);
            $busRouteTableLogEntity->setClientIP($request->getClientIp());
            $busRouteTableLogEntity->setAction("Edited $originalBusRoute: NEW_DATA--> Route Name = $routeName, Destination =  $destination, Departure Location = $departureLocation");

            $em->merge($busRouteEntity);
            $em->persist($busRouteTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Bus Route Successfully'
            ];

            return new JsonResponse($response, 200);
        }

        $responseFactory = new ResponseFactory();
        $apiProblem = new ApiProblem(403);
        $apiProblem->set('detail', 'Insufficient permission');

        return $responseFactory->createResponse($apiProblem);
    }

    /**
     * @return BusRouteRepository
     */
    public function getBusRouteRepository()
    {
        return $this->getDoctrine()
            ->getRepository("BusRouteBundle:BusRoute");
    }

    /**
     * @Route("/bus-routes/{id}")
     * @Method("DELETE")
     */
    public function deleteBusRouteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($busRoute = $this->getBusRouteRepository()->find($id)) {

            $busRouteToBeDeleted = $busRoute->getRouteName();

            $busRouteTableLogEntity = new BusRouteTableLog();
            $busRouteTableLogEntity->setClientIP($request->getClientIp());
            $busRouteTableLogEntity->setUser('awesome_admin');
            $busRouteTableLogEntity->setAction("Removed $busRouteToBeDeleted");
            $busRouteTableLogEntity->setCreated(DateTimeProvider::getNow());

            $em->remove($busRoute);
            $em->persist($busRouteTableLogEntity);
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

    /**
     * @Route("/bus-routes")
     * @Method("POST")
     */
    public function createBusRouteAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $errors = [];

        $busRouteRepository = $this->getBusRouteRepository();

        if (!$departureLocation = $data['departureLocation']) {
            $errors[] = "'Departure Location' is required";
        }

        if (!$destination = $data['destination']) {
            $errors[] = "'Destination' is required";
        }

        if (!$routeName = $data['routeName']) {
            $errors[] = "'Route Name' is required";
        }

        if (!$username = $data['username']) {
            $errors[] = "'username' is required";
        } else {
            if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

                if ($routeName = $busRouteRepository->findOneByRouteName($routeName)) {
                    $response = [
                        'message' => $data['routeName'] . " already exists as a route name."
                    ];
                    $status = 400;

                    return new JsonResponse($response, $status);
                } else {
                    $busRouteEntity = new BusRoute();

                    $busRouteEntity->setRouteName($data['routeName']);
                    $busRouteEntity->setUpdated(DateTimeProvider::getNow());
                    $busRouteEntity->setCreated(DateTimeProvider::getNow());
                    $busRouteEntity->setDepartureLocation($departureLocation);
                    $busRouteEntity->setDestination($destination);

                    $busRouteTableLogEntity = new BusRouteTableLog();
                    $busRouteTableLogEntity->setClientIP($request->getClientIp());
                    $busRouteTableLogEntity->setUser($username);
                    $busRouteTableLogEntity->setAction("Added " . $data['routeName']);
                    $busRouteTableLogEntity->setCreated(DateTimeProvider::getNow());

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($busRouteEntity);
                    $em->persist($busRouteTableLogEntity);
                    $em->flush();

                    $response = [
                        'message' => $routeName . " successfully added to the bus route list."
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
                        'message' => 'There were some issues creating the Bus Route',
                        'errors' => $errors
                    ];
                    return new JsonResponse($response, 400);
                }
            }
        }
    }

    /**
     * @Route("/bus-routes")
     * @Method("GET")
     */
    public function listBusRouteAction()
    {
        $busRoutes = $this->getBusRouteRepository()->findAll();

        $response = [];

        foreach ($busRoutes as $busRoute) {
            $response[] = [
                'id' => $busRoute->getId(),
                'routeName' => $busRoute->getRouteName(),
                'destination' => $busRoute->getDestination(),
                'departureLocation' => $busRoute->getDepartureLocation()
            ];
        }

        return new JsonResponse($response);
    }
}
