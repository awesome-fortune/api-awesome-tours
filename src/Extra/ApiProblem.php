<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/29
 * Time: 8:11 PM
 */

namespace Extra;
use Symfony\Component\HttpFoundation\Response;
/**
 * Class ApiProblem
 * @package Extra
 * 
 * A wrapper for holding data to be used for application/problem+json response
 */
class ApiProblem
{
    const TYPE_VALIDATION_ERROR = 'validation error';
    const TYPE_INVALID_REQUEST_BODY_FORMAT = 'invalid_body_format';
    
    private static $titles = [
        self::TYPE_VALIDATION_ERROR => 'There was a validation error',
        self::TYPE_INVALID_REQUEST_BODY_FORMAT => 'Invalid JSON format sent'
    ];
    
    private $statusCode;
    
    private $type;
    
    private $title;
    
    private $extraData = [];
    
    public function __construct($statusCode, $type = null)
    {
        $this->statusCode = $statusCode;
        
        if ($type === null) {
            /*
             * No type? The default is about: blank and the title should
             * be the standard status code
             */
            $type = 'about:blank';
            $title = isset(Response::$statusTexts[$statusCode])
            ? Response::$statusTexts[$statusCode]
            : 'Unknown status code: (';
        } else {
            if (!isset(self::$titles[$type])) {
                throw new \InvalidArgumentException('No title for type ' . $type);
            }
            
            $title = self::$titles[$type];
        }
        
        $this->type = $type;
        $this->title = $title;
    }
    
    public function toArray()
    {
        return array_merge(
            $this->extraData,
            array(
                'status' => $this->statusCode,
                'type' => $this->type,
                'title' => $this->title
            )
        );
    }
    
    public function set($name, $value) 
    {
        $this->extraData[$name] = $value;
    }
    
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
}