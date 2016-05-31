<?php

namespace ApiLogsBundle\Controller;

use Extra\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
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
     * @Route("/trip-logs")
     * @Method("POST")
     */
    public function tripLogsAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (ApiClient::hasAdminCredentialsForJSONRequest($data['username'])) {
            $records = $this->getDoctrine()
                ->getRepository("TripBundle:Trip")
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
                ->getRepository("BusRouteBundle:BusRoute")
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
                ->getRepository("UserBundle:User")
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
