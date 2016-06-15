<?php

namespace BusBundle\Controller;

use ApiLogsBundle\Entity\BusTypeTableLog;
use BusBundle\Entity\BusType;
use BusBundle\Repository\BusTypeRepository;
use Extra\ApiClient;
use Extra\ApiProblem;
use Extra\DateTimeProvider;
use Extra\ResponseFactory;
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
     * @param $id
     * @param $request
     * @return JsonResponse
     */
    public function editBusTypeAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $busType = $data['type'];
        $description = $data['description'];
        $username = $data['username'];

        if (ApiClient::hasAdminCredentialsForJSONRequest($username)) {
            $em = $this->getDoctrine()->getManager();

            $busTypeEntity = $this->getBusTypeRepository()->find($id);

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
     * @Route("/bus-types/{id}")
     * @Method("DELETE")
     * @param $id
     * @param $request
     * @return JsonResponse
     */
    public function deleteBusTypeAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($busType = $this->getBusTypeRepository()->find($id)) {

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
            ];

            return new JsonResponse($response, 200);
        }
        
        $responseFactory = new ResponseFactory();
        $apiProblem = new ApiProblem(404);
        $apiProblem->set('detail', 'Resource not found');

        return $responseFactory->createResponse($apiProblem);

    }

    /**
     * @return BusTypeRepository
     */
    public function getBusTypeRepository()
    {
        return $this->getDoctrine()
            ->getRepository("BusBundle:BusType");
    }

    /**
     * @Route("/bus-types")
     * @Method("POST")
     */
    public function createBusTypeAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $errors = [];
        $busTypeRepository = $this->getBusTypeRepository();

        if (!$busType = $data['type']) {
            $errors[] = '"Bus Type" is required';
        }

        if (!$description = $data['description']) {
            $errors[] = '"Description" is required';
        }

        if (!$username = $data['username']) {
            $errors[] = '"username" is required';
        } else {
            if (ApiClient::hasAdminCredentialsForJSONRequest($username) && count($errors) === 0) {

                if ($busType = $busTypeRepository->findRecordByBusType($busType)) {
                    $response = [
                        'message' => $data['type'] . " already exists as a bus type."
                    ];
                    $status = 400;

                    return new JsonResponse($response, $status);
                } else {

                    // All is well, let's create the record
                    $busTypeEntity = new BusType();

                    $busTypeEntity->setType($data['type']);
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
                        'message' => $data['type'] . " successfully added as a bus type."
                    ];

                    $status = 200;
                    return new JsonResponse($response, $status);
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
     * @Route("/bus-types")
     * @Method("GET")
     */
    public function listBusTypeAction()
    {
        $busTypes = $this->getBusTypeRepository()->findAll();

        $response = [];

        foreach ($busTypes as $busType) {
            $response[] = [
                'id' => $busType->getId(),
                'type' => $busType->getType(),
                'description' => $busType->getDescription()
            ];
        }

        return new JsonResponse($response);
    }
}
