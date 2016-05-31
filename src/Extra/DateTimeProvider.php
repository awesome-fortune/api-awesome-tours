<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/04/30
 * Time: 12:11 PM
 * 
 * DateTimeProvider acts as a wrapper for whichever \DateTime functions we want to use. 
 */

namespace Extra;


class DateTimeProvider
{
    public static function getNow()
    {
        $now = new \DateTime('now');
        $now->format('Y-M-d H:i:s');
        
        return $now;
    }
}