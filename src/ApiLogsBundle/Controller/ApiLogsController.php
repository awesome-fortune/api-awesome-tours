<?php

namespace ApiLogsBundle\Controller;

use Extra\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ApiLogsController extends Controller
{
    /**
     * @Route("/bus-logs")
     * @Method("POST")
     */
    public function busLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (ApiClient::hasAdminCredentialsForJSONRequest($data['username'])) {
            $records = $this->getDoctrine()
                ->getRepository("ApiLogsBundle:BusTableLog")
                ->findAll();

            foreach ($records as $record)
            {
                $response[] = [
                    'action' => $record->getAction(),
                    'user' => $record->getUser(),
                    'ipAddress' => $record->getClientIP(),
                    'timestamp' => $record->getCreated()
                ];
            }
        } else {
            $response = [
                'message' => 'Insufficient permissions',
                'status' => 'Error',
                'data' => $data
            ];
        }
        
        return new JsonResponse($response);
    }

    /**
     * @Route("/user-trip-logs")
     * @Method("POST")
     */
    public function userTripLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $username = $data['username'];
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            "SELECT t.created, t.user, t.action
            FROM ApiLogsBundle:TripTableLog t
            WHERE t.user  = '$username'"
        );

        $products = $query->getResult();

        return new JsonResponse($products);
    }

    /**
     * @Route("/trip-logs")
     * @Method("POST")
     */
    public function tripLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (ApiClient::hasAdminCredentialsForJSONRequest($data['username'])) {
            $records = $this->getDoctrine()
                ->getRepository("ApiLogsBundle:TripTableLog")
                ->findAll();

            foreach ($records as $record)
            {
                $response[] = [
                    'action' => $record->getAction(),
                    'user' => $record->getUser(),
                    'ipAddress' => $record->getClientIP(),
                    'timestamp' => $record->getCreated()
                ];
            }
        } else {
            $response = [
                'message' => 'Insufficient permissions',
                'status' => 'Error'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/bus-route-logs")
     * @Method("POST")
     */
    public function busRoutesLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (ApiClient::hasAdminCredentialsForJSONRequest($data['username'])) {
            $records = $this->getDoctrine()
                ->getRepository("ApiLogsBundle:BusRouteTableLog")
                ->findAll();

            foreach ($records as $record)
            {
                $response[] = [
                    'action' => $record->getAction(),
                    'user' => $record->getUser(),
                    'ipAddress' => $record->getClientIP(),
                    'timestamp' => $record->getCreated()
                ];
            }
        } else {
            $response = [
                'message' => 'Insufficient permissions',
                'status' => 'Error'
            ];
        }

        return new JsonResponse($response);
    }

    /**
     * @Route("/user-logs")
     * @Method("POST")
     */
    public function userLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (ApiClient::hasAdminCredentialsForJSONRequest($data['username'])) {
            $records = $this->getDoctrine()
                ->getRepository("ApiLogsBundle:UserTableLog")
                ->findAll();

            foreach ($records as $record)
            {
                $response[] = [
                    'action' => $record->getAction(),
                    'ipAddress' => $record->getClientIP(),
                    'timestamp' => $record->getCreated()
                ];
            }
        } else {
            $response = [
                'message' => 'Insufficient permissions',
                'status' => 'Error',
            ];
        }

        return new JsonResponse($response);
    }
}
