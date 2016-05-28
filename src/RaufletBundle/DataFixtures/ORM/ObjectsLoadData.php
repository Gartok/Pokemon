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
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ObjectsLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Objects();

        $object->setName('Pierre Eau');
        $object->setQuantity(10);
        $object->setTrainer($this->getReference('trainer1'));
        $object->setType($this->getReference('objecttype1'));
        $manager->persist($object);

        $this->addReference("object1", $object);

        $object = new Objects();

        $object->setName('Pierre Feu');
        $object->setQuantity(10);
        $object->setType($this->getReference('objecttype1'));
        $object->setTrainer($this->getReference('trainer2'));
        $manager->persist($object);

        $this->addReference("object2", $object);

        $object = new Objects();

        $object->setName('Pierre Foudre');
        $object->setQuantity(10);
        $object->setTrainer($this->getReference('trainer3'));
        $object->setType($this->getReference('objecttype1'));
        $manager->persist($object);

        $this->addReference("object3", $object);

        $object = new Objects();

        $object->setName('Pierre Lune');
        $object->setQuantity(10);
        $object->setType($this->getReference('objecttype1'));
        $object->setTrainer($this->getReference('trainer4'));
        $manager->persist($object);

        $this->addReference("object4", $object);

        $object = new Objects();

        $object->setName('Antidote');
        $object->setQuantity(10);
        $object->setType($this->getReference('objecttype2'));
        $object->setTrainer($this->getReference('trainer1'));
        $manager->persist($object);

        $this->addReference("object5", $object);

        $object->setName('CS01 Coupe');
        $object->setQuantity(10);
        $object->setType($this->getReference('objecttype4'));
        $object->setTrainer($this->getReference('trainer2'));
        $manager->persist($object);

        $this->addReference("object6", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }
}

?>