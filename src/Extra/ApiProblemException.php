<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/29
 * Time: 8:32 PM
 */

namespace Extra;


use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiProblemException extends HttpException
{
    private $apiProblem;
    
    public function __construct(ApiProblem $apiProblem, \Exception $previous = null, array $headers = array(), $code = 0)
    {
        $this->apiProblem = $apiProblem;
        $statusCode = $apiProblem->getStatusCode();
        $message = $apiProblem->getTitle();
        
        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
    
    public function getApiProblem()
    {
        return $this->apiProblem;
    }
}