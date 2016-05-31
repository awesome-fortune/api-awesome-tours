<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/29
 * Time: 8:37 PM
 */

namespace Extra;

use Symfony\Component\HttpFoundation\JsonResponse;

class ResponseFactory
{
    public function createResponse(ApiProblem $apiProblem)
    {
        $data = $apiProblem->toArray();
        // making type a URL, to a temporarily fake page
        if ($data['type'] != 'about:blank') {
            $data['type'] = 'http://localhost:8000/docs/errors#' .$data['type'];
        }
        
        $response = new JsonResponse(
            $data,
            $apiProblem->getStatusCode()
        );
        
        $response->headers->set('Content-Type', 'application/problem+json');
        
        return $response;
    }
}