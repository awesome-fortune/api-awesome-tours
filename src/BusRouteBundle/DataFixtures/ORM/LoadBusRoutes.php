<?php

/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/22
 * Time: 10:14 AM
 */

namespace BusRouteBundle\DataFixtures\ORM;

use BusRouteBundle\Entity\BusRoute;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Extra\DateTimeProvider;

class LoadBusRoutes implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $defaultBusRoute = new BusRoute();
        $defaultBusRoute->setRouteName("Pretoria to Johannesburg");
        $defaultBusRoute->setCreated(DateTimeProvider::getNow());
        $defaultBusRoute->setUpdated(DateTimeProvider::getNow());
        $defaultBusRoute->setDepartureLocation("Pretoria");
        $defaultBusRoute->setDestination("Johannesburg");
        
        $manager->persist($defaultBusRoute);
        $manager->flush();
    }
}