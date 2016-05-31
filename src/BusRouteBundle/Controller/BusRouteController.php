<?php

namespace BusRouteBundle\Controller;

use ApiLogsBundle\Entity\BusRouteTableLog;
use BusRouteBundle\Entity\BusRoute;
use Extra\ApiClient;
use Extra\DateTimeProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
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

            $busRouteEntity = $this->getDoctrine()
                ->getRepository("BusRouteBundle:BusRoute")
                ->find($id);
            
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
        } else {
            $response = [
                'message' => "Insufficient permissions",
                'status' => 'error'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/bus-routes/{id}")
     * @Method("DELETE")
     */
    public function deleteBusRouteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $busRoute = $em->getRepository("BusRouteBundle:BusRoute")->find($id);

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

        return new JsonResponse($response);
    }

    /**
     * @Route("/bus-routes")
     * @Method("POST")
     */
    public function createBusRouteAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $departureLocation = $data['departureLocation'];
        $destination = $data['destination'];
        $routeName = $data['routeName'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

            $busRouteEntity = new BusRoute();

            $busRouteEntity->setRouteName($routeName);
            $busRouteEntity->setUpdated(DateTimeProvider::getNow());
            $busRouteEntity->setCreated(DateTimeProvider::getNow());
            $busRouteEntity->setDepartureLocation($departureLocation);
            $busRouteEntity->setDestination($destination);

            $em = $this->getDoctrine()->getManager();
            $em->persist($busRouteEntity);
            $em->flush();

            $response = [
                'message' => $routeName . " successfully added to the bus route list."
            ];
        } else {
            $response = [
                'message' => "Insufficient permissions",
                'status' => 'error'
            ];
        }
        return new JsonResponse($response);
    }

    /**
     * @Route("/bus-routes")
     * @Method("GET")
     */
    public function listBusRouteAction()
    {
        $busRoutes = $this->getDoctrine()
            ->getRepository("BusRouteBundle:BusRoute")
            ->findAll();

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
