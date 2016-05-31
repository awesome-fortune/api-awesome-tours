<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/29
 * Time: 8:46 PM
 */

namespace Extra;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ApiExceptionSubscriber implements EventSubscriberInterface
{
    private $debug;
    private $responseFactory;

    public function __construct($debug, ResponseFactory $responseFactory)
    {
        $this->debug;
        $this->responseFactory;
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::EXCEPTION => 'onKernelException'
        );
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $e = $event->getException();
        
        $statusCode = $e instanceof HttpExceptionInterface ? $e->getStatusCode() : 500;
        
        // allow 500 errors to be thrown
        if ($this->debug && $statusCode >= 500) {
            return;
        }
        
        if ($e instanceof ApiProblemException) {
            $apiProblem = $e->getApiProblem();
        } else {
            $apiProblem = new ApiProblem($statusCode); 
            
            /*
             * If it's an HttpException message (e.g for 404, 403),
             * we'll say as rule that the exception message is safe
             * for the client. Otherwise, it could be some sensitive 
             * low-level exception, which should *not* be exposed 
             */
            if ($e instanceof HttpExceptionInterface) {
                $apiProblem->set('detail', $e->getMessage());
            }
        }
    }
}