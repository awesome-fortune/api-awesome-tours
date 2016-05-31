<?php

namespace BusBundle\Controller;

use ApiLogsBundle\Entity\BusTableLog;
use BusBundle\Entity\Bus;
use Extra\DateTimeProvider;
use Extra\ApiClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;


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
        
        $seats = $data['numberOfSeats'];
        $busType = $data['busType'];
        $busRegistration = $data['busRegistration'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            $busEntity = new Bus();

            $busEntity->setSeats($seats);
            $busEntity->setBusRegistration($busRegistration);
            $busEntity->setBusType($busType);
            $busEntity->setCreated(DateTimeProvider::getNow());
            $busEntity->setUpdated(DateTimeProvider::getNow());

            $busTableLogEntity = new BusTableLog();
            $busTableLogEntity->setCreated(DateTimeProvider::getNow());
            $busTableLogEntity->setAction("Added $busRegistration");
            $busTableLogEntity->setUser($username);
            $busTableLogEntity->setClientIP($request->getClientIp());

            $em = $this->getDoctrine()->getManager();
            $em->persist($busEntity);
            $em->persist($busTableLogEntity);
            $em->flush();

            $response = [
                'message' => $busRegistration . " successfully added to the bus list.",
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
     * @Route("/check/bus-registration-existence")
     * @Method("POST")
     * 
     * Used to check if a bus already exists based on the user input for 
     * the busRegistration field
     */
    public function checkBusExistenceAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $buses = $this->getDoctrine()
            ->getRepository("BusBundle:Bus")
            ->findAll();

        $busRegistration = $data['busRegistration'];

        $busRegistrationExists = false;
        
        foreach ($buses as $bus)
        {
            if (strcasecmp($bus->getBusRegistration(), $busRegistration) === 0)
            {
                $busRegistrationExists = true;
                break;
            }
        }
        
        $response = [
            'busRegistrationExists' => $busRegistrationExists,
        ];

        return new JsonResponse($response);
    }
    
    /**
     * @Route("/buses")
     * @Method("GET")
     */
    public function listBusAction(Request $request)
    {
        $buses = $this->getDoctrine()
            ->getRepository("BusBundle:Bus")
            ->findAll();

        $response = [];

        foreach ($buses as $bus)
        {
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
     * @Route("/buses/{id}")
     * @Method("DELETE")
     */
    public function deleteBusAction($id, Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_USER');
        $em = $this->getDoctrine()->getManager();
        $bus = $em->getRepository('BusBundle:Bus')->find($id);

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
            'message' => 'Successfully removed item.',
            'status' => 'Success'
        ];

        return new JsonResponse($response);
    }
}
