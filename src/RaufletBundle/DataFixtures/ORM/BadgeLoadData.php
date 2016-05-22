<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Attack;
use RaufletBundle\Entity\Badge;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BadgeLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Badge();

        $object->setName('Roche');
        $object->setArena($this->getReference('arena5'));
        $object->setMaster($this->getReference('trainer1'));
        $manager->persist($object);

        $this->addReference("badge1", $object);

        $object = new Badge();

        $object->setName('Cascade');
        $object->setArena($this->getReference('arena2'));
        $object->setMaster($this->getReference('trainer6'));
        $manager->persist($object);

        $this->addReference("badge2", $object);

        $object = new Badge();

        $object->setName('Foudre');
        $object->setArena($this->getReference('arena3'));
        $object->setMaster($this->getReference('trainer7'));
        $manager->persist($object);

        $this->addReference("badge3", $object);

        $object = new Badge();

        $object->setName('Prisme');
        $object->setArena($this->getReference('arena1'));
        $object->setMaster($this->getReference('trainer4'));
        $manager->persist($object);

        $this->addReference("badge4", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 14;
    }
}

?>