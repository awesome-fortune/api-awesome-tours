<?php

/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/22
 * Time: 10:04 AM
 *
 */

namespace BusBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BusBundle\Entity\Bus;
use Extra\DateTimeProvider;

class LoadBusData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $defaultBus = new Bus();
        $defaultBus->setBusRegistration("FORTUNE GP");
        $defaultBus->setCreated(DateTimeProvider::getNow());
        $defaultBus->setUpdated(DateTimeProvider::getNow());
        $defaultBus->setBusType("Mini Bus");
        $defaultBus->setSeats(15);

        $manager->persist($defaultBus);
        $manager->flush();
    }
}