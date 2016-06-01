<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'apilogs_apilogs_buslogs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::busLogsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-logs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'apilogs_apilogs_triplogs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::tripLogsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trip-logs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'apilogs_apilogs_busrouteslogs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::busRoutesLogsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-route-logs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'apilogs_apilogs_userlogs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::userLogsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user-logs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'busroute_busroute_editbusroute' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::editBusRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bus-routes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'busroute_busroute_deletebusroute' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::deleteBusRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bus-routes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'busroute_busroute_createbusroute' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::createBusRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-routes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'busroute_busroute_listbusroute' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::listBusRouteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-routes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trip_trip_edittrip' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TripBundle\\Controller\\TripController::editTripAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trips',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trip_trip_deletetrip' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TripBundle\\Controller\\TripController::deleteTripAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/trips',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trip_trip_createtrip' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TripBundle\\Controller\\TripController::createTripAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trips',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trip_trip_listtrips' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TripBundle\\Controller\\TripController::listTripsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trips',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bus_editbus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusController::editBusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/buses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bus_createbus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusController::createBusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bus_checkbusexistence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusController::checkBusExistenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check/bus-registration-existence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bus_listbus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusController::listBusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/buses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bus_deletebus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusController::deleteBusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/buses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bustype_editbustype' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusTypeController::editBusTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bus-types',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bustype_checkbustypeexistence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusTypeController::checkBusTypeExistenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check/bus-type-existence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bustype_deletebustype' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusTypeController::deleteBusTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bus-types',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bustype_createbustype' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusTypeController::createBusTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-types',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bus_bustype_listbustype' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BusBundle\\Controller\\BusTypeController::listBusTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bus-types',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_user_registeruser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::registerUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_user_showuser' => array (  0 =>   array (    0 => 'username',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::showUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'username',    ),    1 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_user_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_user_newtoken' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\UserController::newTokenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tokens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
