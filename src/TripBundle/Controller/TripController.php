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
use TripBundle\Repository\TripRepository;
use Extra\ResponseFactory;
use Extra\ApiProblem;

class TripController extends Controller
{
    /**
     * @Route("/trips/{id}")
     * @Method("PUT")
     */
    public function editTripAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $username = $data['username'];


        $em = $this->getDoctrine()->getManager();

        $tripEntity = $this->getTripRepository()->find($id);

        if ($tripEntity->getSeatsAvailable() != 0) {
            $originalTrip = $tripEntity->getTripName();
            $seatsAvailable = $tripEntity->getSeatsAvailable() - 1;

            $tripTableLogEntity = new TripTableLog();
            $tripTableLogEntity->setUser($username);
            $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
            $tripTableLogEntity->setClientIP($request->getClientIp());
            $tripTableLogEntity->setAction("Bought a ticket. Ticket ID: $id for trip: $originalTrip");

            $tripEntity->setSeatsAvailable($seatsAvailable);
            $tripEntity->setUpdated(DateTimeProvider::getNow());

            $em->merge($tripEntity);
            $em->persist($tripTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Successfully purchased ticket.',
                'status' => 'purchased'
            ];   
        } else {
            $response = [
                'message' => 'tickets have been sold out',
                'status' => 'sold_out'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/trips/{id}")
     * @Method("DELETE")
     */
    public function deleteTripAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($trip = $this->getTripRepository()->find($id)) {
            $tripName = $trip->getTripName();

            $tripTableLogEntity = new TripTableLog();
            $tripTableLogEntity->setClientIP($request->getClientIp());
            $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
            $tripTableLogEntity->setUser('awesome_admin');
            $tripTableLogEntity->setAction("Added $tripName");

            $em->remove($trip);
            $em->persist($tripTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Trip successfully removed from the list.'
            ];

            return new JsonResponse($response);
        }

        $responseFactory = new ResponseFactory();
        $apiProblem = new ApiProblem(404);
        $apiProblem->set('detail', 'Resource not found');

        return $responseFactory->createResponse($apiProblem);
    }

    /**
     * @Route("/trips")
     * @Method("POST")
     */
    public function createTripAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $errors = [];
        $tripRepository = $this->getTripRepository();

        if (!$tripName = $data['tripName']) {
            $errors[] = "'Trip Name' is required";
        }

        if (!$routeID = $data['route']) {
            $errors[] = "'Bus Route' is required";
        }

        if (!$seats = $data['seats']) {
            $errors[] = "'Number of Seats' is required";
        }

        if (!$fare = $data['fare']) {
            $errors[] = "'Fare' is required";
        }

        if (!$busID = $data['bus']) {
            $errors[] ="'Bus' is required";
        }

        if (!$username = $data['username']) {
            $errors[] = "'Username' is required";
        } else {
            if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {

                if ($tripName = $tripRepository->findOneByTripName($tripName)) {
                    $response = [
                        'message' => $data['tripName'] . " already exists."
                    ];
                    $status = 400;

                    return new JsonResponse($response, $status);
                } else {
                    $tripTableLogEntity = new TripTableLog();
                    $tripTableLogEntity->setClientIP($request->getClientIp());
                    $tripTableLogEntity->setCreated(DateTimeProvider::getNow());
                    $tripTableLogEntity->setUser($username);
                    $tripTableLogEntity->setAction("Added " . $data['tripName']);

                    $tripEntity = new Trip();

                    $tripEntity->setFare($fare);
                    $tripEntity->setRouteID($routeID);
                    $tripEntity->setUpdated(DateTimeProvider::getNow());
                    $tripEntity->setBusID($busID);
                    $tripEntity->setSeatsAvailable($seats);
                    $tripEntity->setTripName($data['tripName']);
                    $tripEntity->setCreated(DateTimeProvider::getNow());

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($tripTableLogEntity);
                    $em->persist($tripEntity);
                    $em->flush();

                    $response = [
                        'message' => $data['tripName'] . " successfully added to the trip list."
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
     * @return TripRepository
     */
    public function getTripRepository()
    {
        return $this->getDoctrine()
            ->getRepository("TripBundle:Trip");
    }

    /**
     * @Route("/trips")
     * @Method("GET")
     */
    public function listTripsAction()
    {
        $trips = $this->getTripRepository()->findAll();

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
