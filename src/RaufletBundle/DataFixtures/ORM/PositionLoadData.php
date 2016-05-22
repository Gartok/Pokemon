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
        $object->setZone($this->getReference("zone1"));

        $manager->persist($object);
        $this->addReference("position1", $object);

        $object = new Position();

        $object->setX(254);
        $object->setY(998);

        $object->setZone($this->getReference("zone2"));

        $manager->persist($object);
        $this->addReference("position2", $object);

        $object = new Position();

        $object->setX(124);
        $object->setY(324);
        $object->setZone($this->getReference("zone1"));

        $manager->persist($object);
        $this->addReference("position3", $object);

        $object = new Position();

        $object->setX(120);
        $object->setY(145);
        $object->setZone($this->getReference("zone1"));

        $manager->persist($object);
        $this->addReference("position4", $object);

        $object = new Position();

        $object->setX(199);
        $object->setY(99);
        $object->setZone($this->getReference("zone1"));

        $manager->persist($object);

        $this->addReference("position5", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 12;
    }
}

?>