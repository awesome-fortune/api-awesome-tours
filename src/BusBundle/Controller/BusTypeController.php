<?php

namespace BusBundle\Controller;

use ApiLogsBundle\Entity\BusTypeTableLog;
use BusBundle\Entity\BusType;
use Extra\ApiClient;
use Extra\DateTimeProvider;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BusTypeController extends Controller
{

    /**
     * @Route("bus-types/{id}")
     * @Method("PUT")
     */
    public function editBusTypeAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $busType = $data['type'];
        $description = $data['description'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            $em = $this->getDoctrine()->getManager();

            $busTypeEntity = $this->getDoctrine()
                ->getRepository('BusBundle:BusType')
                ->find($id);

            $originalBusType = $busTypeEntity->getType();

            $busTypeEntity->setType($busType);
            $busTypeEntity->setDescription($description);
            $busTypeEntity->setUpdated(DateTimeProvider::getNow());

            $busTypeTableLogEntity = new BusTypeTableLog();
            $busTypeTableLogEntity->setClientIP($request->getClientIp());
            $busTypeTableLogEntity->setUser($username);
            $busTypeTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busTypeTableLogEntity->setAction("Edited bus $originalBusType: *NEW_DATA--> Bus Type = $busType, Description = $description");

            $em->merge($busTypeEntity);
            $em->persist($busTypeTableLogEntity);
            $em->flush();

            $response = [
                'message' => 'Bus Type Successfully Updated'
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
     * @Route("/check/bus-type-existence")
     * @Method("POST")
     * 
     * Used to check if a bus already exists based on the user input for the 
     * busType field
     */
    public function checkBusTypeExistenceAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $busTypes = $this->getDoctrine()
            ->getRepository("BusBundle:BusType")
            ->findAll();

        $busTypeExists = false;

        foreach ($busTypes as $busType)
        {
            if (strcasecmp($busType->getType(), $data['type']) === 0)
            {
                $busTypeExists = true;
                break;
            }
        }

        $response = [
            'busTypeExists' => $busTypeExists
        ];

        return new JsonResponse($response);
    }

    /**
     * @Route("/bus-types/{id}")
     * @Method("DELETE")
     */
    public function deleteBusTypeAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $busType = $em->getRepository('BusBundle:BusType')->find($id);

        $busTypeToBeRemoved = $busType->getType();

        $busTypeTableLogEntity = new BusTypeTableLog();
        $busTypeTableLogEntity->setAction("Removed $busTypeToBeRemoved");
        $busTypeTableLogEntity->setCreated(DateTimeProvider::getNow());
        $busTypeTableLogEntity->setClientIP($request->getClientIp());
        $busTypeTableLogEntity->setUser('awesome_admin');

        $em->remove($busType);
        $em->persist($busTypeTableLogEntity);
        $em->flush();
        
        $response = [
            'message' => 'Successfully removed item.',
            'status' => 'Success'
        ];
        
        return new JsonResponse($response);
    }
    
    /**
     * @Route("/bus-types")
     * @Method("POST")
     */
    public function createBusTypeAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $busType = $data['type'];
        $description = $data['description'];
        $username = $data['username'];
        
        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            
            $busTypeEntity = new BusType();

            $busTypeEntity->setType($busType);
            $busTypeEntity->setDescription($description);
            $busTypeEntity->setCreated(DateTimeProvider::getNow());
            $busTypeEntity->setUpdated(DateTimeProvider::getNow());

            $busTypeTableLogEntity = new BusTypeTableLog();
            $busTypeTableLogEntity->setClientIP($request->getClientIp());
            $busTypeTableLogEntity->setUser($username);
            $busTypeTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busTypeTableLogEntity->setAction("Added $busType");
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($busTypeEntity);
            $em->persist($busTypeTableLogEntity);
            $em->flush();

            $response = [
                'message' => $busType . " successfully added as a bus type.",
                'status' => 'success'
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
     * @Route("/bus-types")
     * @Method("GET")
     */
    public function listBusTypeAction()
    {
        $busTypes = $this->getDoctrine()
            ->getRepository("BusBundle:BusType")
            ->findAll();
        
        $response = [];
        
        foreach ($busTypes as $busType)
        {
            $response[] = [
                'id' => $busType->getId(),
                'type' => $busType->getType(),
                'description' => $busType->getDescription()
            ];
        }
        
        return new JsonResponse($response);
    }
}
