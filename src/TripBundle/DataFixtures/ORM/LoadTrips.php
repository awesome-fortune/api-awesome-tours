<?php

/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/22
 * Time: 10:22 AM
 */

namespace TripBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Extra\DateTimeProvider;
use TripBundle\Entity\Trip;

class LoadTrips implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $defaultTrip = new Trip();
        $defaultTrip->setCreated(DateTimeProvider::getNow());
        $defaultTrip->setUpdated(DateTimeProvider::getNow());
        $defaultTrip->setBusID(1);
        $defaultTrip->setRouteID(1);
        $defaultTrip->setFare(30);
        $defaultTrip->setTripName("Pretoria to Johannesburg Minibus trip");
        $defaultTrip->setSeatsAvailable(15);

        $manager->persist($defaultTrip);
        $manager->flush();
    }
}