<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // apilogs_apilogs_buslogs
        if ($pathinfo === '/bus-logs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_apilogs_apilogs_buslogs;
            }

            return array (  '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::busLogsAction',  '_route' => 'apilogs_apilogs_buslogs',);
        }
        not_apilogs_apilogs_buslogs:

        // apilogs_apilogs_usertriplogs
        if ($pathinfo === '/user-trip-logs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_apilogs_apilogs_usertriplogs;
            }

            return array (  '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::userTripLogsAction',  '_route' => 'apilogs_apilogs_usertriplogs',);
        }
        not_apilogs_apilogs_usertriplogs:

        // apilogs_apilogs_triplogs
        if ($pathinfo === '/trip-logs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_apilogs_apilogs_triplogs;
            }

            return array (  '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::tripLogsAction',  '_route' => 'apilogs_apilogs_triplogs',);
        }
        not_apilogs_apilogs_triplogs:

        // apilogs_apilogs_busrouteslogs
        if ($pathinfo === '/bus-route-logs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_apilogs_apilogs_busrouteslogs;
            }

            return array (  '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::busRoutesLogsAction',  '_route' => 'apilogs_apilogs_busrouteslogs',);
        }
        not_apilogs_apilogs_busrouteslogs:

        // apilogs_apilogs_userlogs
        if ($pathinfo === '/user-logs') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_apilogs_apilogs_userlogs;
            }

            return array (  '_controller' => 'ApiLogsBundle\\Controller\\ApiLogsController::userLogsAction',  '_route' => 'apilogs_apilogs_userlogs',);
        }
        not_apilogs_apilogs_userlogs:

        if (0 === strpos($pathinfo, '/bus-routes')) {
            // busroute_busroute_editbusroute
            if (preg_match('#^/bus\\-routes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'busroute_busroute_editbusroute')), array (  '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::editBusRouteAction',));
            }

            // busroute_busroute_deletebusroute
            if (preg_match('#^/bus\\-routes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_busroute_busroute_deletebusroute;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'busroute_busroute_deletebusroute')), array (  '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::deleteBusRouteAction',));
            }
            not_busroute_busroute_deletebusroute:

            // busroute_busroute_createbusroute
            if ($pathinfo === '/bus-routes') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_busroute_busroute_createbusroute;
                }

                return array (  '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::createBusRouteAction',  '_route' => 'busroute_busroute_createbusroute',);
            }
            not_busroute_busroute_createbusroute:

            // busroute_busroute_listbusroute
            if ($pathinfo === '/bus-routes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_busroute_busroute_listbusroute;
                }

                return array (  '_controller' => 'BusRouteBundle\\Controller\\BusRouteController::listBusRouteAction',  '_route' => 'busroute_busroute_listbusroute',);
            }
            not_busroute_busroute_listbusroute:

        }

        if (0 === strpos($pathinfo, '/trips')) {
            // trip_trip_edittrip
            if (preg_match('#^/trips/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_trip_trip_edittrip;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trip_trip_edittrip')), array (  '_controller' => 'TripBundle\\Controller\\TripController::editTripAction',));
            }
            not_trip_trip_edittrip:

            // trip_trip_deletetrip
            if (preg_match('#^/trips/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_trip_trip_deletetrip;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'trip_trip_deletetrip')), array (  '_controller' => 'TripBundle\\Controller\\TripController::deleteTripAction',));
            }
            not_trip_trip_deletetrip:

            // trip_trip_createtrip
            if ($pathinfo === '/trips') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_trip_trip_createtrip;
                }

                return array (  '_controller' => 'TripBundle\\Controller\\TripController::createTripAction',  '_route' => 'trip_trip_createtrip',);
            }
            not_trip_trip_createtrip:

            // trip_trip_listtrips
            if ($pathinfo === '/trips') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_trip_trip_listtrips;
                }

                return array (  '_controller' => 'TripBundle\\Controller\\TripController::listTripsAction',  '_route' => 'trip_trip_listtrips',);
            }
            not_trip_trip_listtrips:

        }

        if (0 === strpos($pathinfo, '/buses')) {
            // bus_bus_editbus
            if (preg_match('#^/buses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_bus_bus_editbus;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bus_bus_editbus')), array (  '_controller' => 'BusBundle\\Controller\\BusController::editBusAction',));
            }
            not_bus_bus_editbus:

            // bus_bus_createbus
            if ($pathinfo === '/buses') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bus_bus_createbus;
                }

                return array (  '_controller' => 'BusBundle\\Controller\\BusController::createBusAction',  '_route' => 'bus_bus_createbus',);
            }
            not_bus_bus_createbus:

        }

        // bus_bus_checkbusexistence
        if ($pathinfo === '/check/bus-registration-existence') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_bus_bus_checkbusexistence;
            }

            return array (  '_controller' => 'BusBundle\\Controller\\BusController::checkBusExistenceAction',  '_route' => 'bus_bus_checkbusexistence',);
        }
        not_bus_bus_checkbusexistence:

        if (0 === strpos($pathinfo, '/bus')) {
            if (0 === strpos($pathinfo, '/buses')) {
                // bus_bus_listbus
                if ($pathinfo === '/buses') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bus_bus_listbus;
                    }

                    return array (  '_controller' => 'BusBundle\\Controller\\BusController::listBusAction',  '_route' => 'bus_bus_listbus',);
                }
                not_bus_bus_listbus:

                // bus_bus_deletebus
                if (preg_match('#^/buses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_bus_bus_deletebus;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bus_bus_deletebus')), array (  '_controller' => 'BusBundle\\Controller\\BusController::deleteBusAction',));
                }
                not_bus_bus_deletebus:

            }

            // bus_bustype_editbustype
            if (0 === strpos($pathinfo, '/bus-types') && preg_match('#^/bus\\-types/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_bus_bustype_editbustype;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bus_bustype_editbustype')), array (  '_controller' => 'BusBundle\\Controller\\BusTypeController::editBusTypeAction',));
            }
            not_bus_bustype_editbustype:

        }

        // bus_bustype_checkbustypeexistence
        if ($pathinfo === '/check/bus-type-existence') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_bus_bustype_checkbustypeexistence;
            }

            return array (  '_controller' => 'BusBundle\\Controller\\BusTypeController::checkBusTypeExistenceAction',  '_route' => 'bus_bustype_checkbustypeexistence',);
        }
        not_bus_bustype_checkbustypeexistence:

        if (0 === strpos($pathinfo, '/bus-types')) {
            // bus_bustype_deletebustype
            if (preg_match('#^/bus\\-types/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bus_bustype_deletebustype;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bus_bustype_deletebustype')), array (  '_controller' => 'BusBundle\\Controller\\BusTypeController::deleteBusTypeAction',));
            }
            not_bus_bustype_deletebustype:

            // bus_bustype_createbustype
            if ($pathinfo === '/bus-types') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bus_bustype_createbustype;
                }

                return array (  '_controller' => 'BusBundle\\Controller\\BusTypeController::createBusTypeAction',  '_route' => 'bus_bustype_createbustype',);
            }
            not_bus_bustype_createbustype:

            // bus_bustype_listbustype
            if ($pathinfo === '/bus-types') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bus_bustype_listbustype;
                }

                return array (  '_controller' => 'BusBundle\\Controller\\BusTypeController::listBusTypeAction',  '_route' => 'bus_bustype_listbustype',);
            }
            not_bus_bustype_listbustype:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // user_user_registeruser
            if ($pathinfo === '/users') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_user_registeruser;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::registerUserAction',  '_route' => 'user_user_registeruser',);
            }
            not_user_user_registeruser:

            // user_user_showuser
            if (preg_match('#^/users/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_user_showuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_user_showuser')), array (  '_controller' => 'UserBundle\\Controller\\UserController::showUserAction',));
            }
            not_user_user_showuser:

        }

        // user_user_logout
        if ($pathinfo === '/logout') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_user_logout;
            }

            return array (  '_controller' => 'UserBundle\\Controller\\UserController::logoutAction',  '_route' => 'user_user_logout',);
        }
        not_user_user_logout:

        // user_user_newtoken
        if ($pathinfo === '/tokens') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_user_newtoken;
            }

            return array (  '_controller' => 'UserBundle\\Controller\\UserController::newTokenAction',  '_route' => 'user_user_newtoken',);
        }
        not_user_user_newtoken:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
