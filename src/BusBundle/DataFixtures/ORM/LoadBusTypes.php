<?php
/**
 * Created by PhpStorm.
 * User: fortune
 * Date: 2016/05/22
 * Time: 10:18 AM
 */

namespace BusBundle\DataFixtures\ORM;


use BusBundle\Entity\BusType;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Extra\DateTimeProvider;

class LoadBusTypes implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $defaultBusType = new BusType();
        $defaultBusType->setUpdated(DateTimeProvider::getNow());
        $defaultBusType->setCreated(DateTimeProvider::getNow());
        $defaultBusType->setType("Mini Bus");
        $defaultBusType->setDescription("A medium sized vehicle that can carry at least 13 passengers");
        
        $manager->persist($defaultBusType);
        $manager->flush();
    }
}