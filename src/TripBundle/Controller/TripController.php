<?php

namespace TripBundle\Controller;

use ApiLogsBundle\Entity\TripTableLog;
use Extra\ApiClient;
use Extra\DateTimeProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use TripBundle\Entity\Trip;

class TripController extends Controller
{
    /**
     * @Route("/trips/{id}")
     * @Method("PUT")
     */
    public function editTripAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $tripName = $data['tripName'];
        $routeName = $data['routeName'];
        $busRegistration = $data['busRegistration'];
        $seatsAvailable = $data['seatsAvailable'];
        $fare = $data['fare'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

            $em = $this->getDoctrine()->getManager();

            $tripEntity = $this->getDoctrine()
                ->getRepository("TripBundle:Trip")
                ->find($id);

            $originalTrip = $tripEntity->getTripName();
            
            $tripTableLogEntity = new TripTableLog();
            $tripTableLogEntity->setUser($username);
            $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
            $tripTableLogEntity->setClientIP($request->getClientIp());
            $tripTableLogEntity->setAction("Edited $originalTrip *NEW_DATA--> Trip Name = $tripEntity, Route Name = $routeName, Bus Registration = $busRegistration, Fare = R$fare, Seats Available = $seatsAvailable");

            $tripEntity->setTripName($tripName);
            $tripEntity->setRouteName($routeName);
            $tripEntity->setBusRegistration($busRegistration);
            $tripEntity->setSeatsAvailable($seatsAvailable);
            $tripEntity->setFare($fare);
            $tripEntity->setUpdated(DateTimeProvider::getNow());

            $em->merge($tripEntity);
            $em->flush();

            $response = [
                'message' => 'Trip successfully updated.'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/trips/{id}")
     * @Method("DELETE")
     */
    public function deleteTripAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $trip = $em->getRepository("TripBundle:Trip")
            ->find($id);

        $em->remove($trip);
        $em->flush();

        $response = [
            'message' => 'Trip successfully removed from the list.'
        ];

        return new JsonResponse($response);
    }
    
    /**
     * @Route("/trips")
     * @Method("POST")
     */
    public function createTripAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $tripName = $data['tripName'];
        $routeID = $data['route'];
        $seats = $data['seats'];
        $fare = $data['fare'];
        $busID = $data['bus'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

            $tripTableLogEntity = new TripTableLog();
            $tripTableLogEntity->setClientIP($request->getClientIp());
            $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
            $tripTableLogEntity->setUser($username);
            $tripTableLogEntity->setAction("Added $tripName");

            $tripEntity = new Trip();

            $tripEntity->setFare($fare);
            $tripEntity->setRouteID($routeID);
            $tripEntity->setUpdated(DateTimeProvider::getNow());
            $tripEntity->setBusID($busID);
            $tripEntity->setSeatsAvailable($seats);
            $tripEntity->setTripName($tripName);
            $tripEntity->setCreated(DateTimeProvider::getNow());

            $em = $this->getDoctrine()->getManager();
            $em->persist($tripTableLogEntity);
            $em->persist($tripEntity);
            $em->flush();

            $response = [
                'message' => $tripName . " successfully added to the trip list."
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
     * @Route("/trip")
     * @Method("POST")
     */
    public function addTripAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $tripName = $data['tripName'];
        $routeID = $data['route'];
        $seats = $data['seats'];
        $fare = $data['fare'];
        $busID = $data['bus'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

            $tripTableLogEntity = new TripTableLog();
            $tripTableLogEntity->setClientIP($request->getClientIp());
            $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
            $tripTableLogEntity->setUser($username);
            $tripTableLogEntity->setAction("Added $tripName");

            $tripEntity = new Trip();

            $tripEntity->setFare($fare);
            $tripEntity->setRouteID($routeID);
            $tripEntity->setUpdated(DateTimeProvider::getNow());
            $tripEntity->setBusID($busID);
            $tripEntity->setSeatsAvailable($seats);
            $tripEntity->setTripName($tripName);
            $tripEntity->setCreated(DateTimeProvider::getNow());

            $em = $this->getDoctrine()->getManager();
            $em->persist($tripTableLogEntity);
            $em->persist($tripEntity);
            $em->flush();

            $response = [
                'message' => $tripName . " successfully added to the trip list."
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
     * @Route("/trips")
     * @Method("GET")
     */
    public function listTripsAction()
    {
        $trips = $this->getDoctrine()
            ->getRepository("TripBundle:Trip")
            ->findAll();

        $response = [];

        foreach ($trips as $trip) {
            $response[] = [
                'id' => $trip->getId(),
                'tripName' => $trip->getTripName(),
                'bus' => $trip->getBusID(),
                'seatsAvailable' => $trip->getSeatsAvailable(),
                'route' => $trip->getRouteID(),
                'fare' => $trip->getFare(),
            ];
        }

        return new JsonResponse($response);
    }
}
