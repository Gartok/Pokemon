<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Attack;
use RaufletBundle\Entity\Npc;
use RaufletBundle\Entity\Objects;
use RaufletBundle\Entity\Pokemons;
use RaufletBundle\Entity\PokemonType;
use RaufletBundle\Entity\Position;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PositionLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Position();

        $object->setX(154);
        $object->setY(160);
        $object->addZone($this->getReference("zone1"));

        $manager->persist($object);

        $object = new Position();

        $object->setX(254);
        $object->setY(998);
        $object->addZone($this->getReference("zone2"));

        $manager->persist($object);

        $object = new Position();

        $object->setX(124);
        $object->setY(324);
        $object->addZone($this->getReference("zone1"));

        $manager->persist($object);

        $object = new Position();

        $object->setX(120);
        $object->setY(145);
        $object->addZone($this->getReference("zone1"));

        $manager->persist($object);

        $object = new Position();

        $object->setX(199);
        $object->setY(99);
        $object->addZone($this->getReference("zone1"));

        $manager->persist($object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 13;
    }
}

?>