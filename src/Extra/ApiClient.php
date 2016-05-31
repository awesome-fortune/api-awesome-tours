<?php

namespace Extra;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/31
 * Time: 2:50 AM
 */

class ApiClient
{
    public static function hasAdminCredentialsForGetRequest(Request $request)
    {
        $username = $request->get('username');

        if (strcmp($username, 'awesome_admin') != 0) {
            return false;
        }
        
        return true;
    }

    /*
     * Authenticates an API request if it has a valid admin username
     */
    public static function hasAdminCredentialsForJSONRequest($username)
    {
        if (strcmp($username, 'awesome_admin') != 0) {
            return false;
        }

        return true;
    }
}