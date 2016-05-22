<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Attack;
use RaufletBundle\Entity\Npc;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NpcLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Npc();

        $object->setName('Pierre');
        $object->setProfession('Champion');
        $object->setText('J\'aime les pokémons roche !');
        $object->setTrainer($this->getReference('trainer1'));
        $manager->persist($object);

        $this->addReference("npc1", $object);

        $object = new Npc();

        $object->setName('Ondine');
        $object->setProfession('Champion');
        $object->setText('J\'aime les pokémons eau !');
        $object->setTrainer($this->getReference('trainer2'));
        $manager->persist($object);

        $this->addReference("npc2", $object);

        $object->setName('Majour Bob');
        $object->setProfession('Champion');
        $object->setText('J\'aime les pokémons électriques !');
        $object->setTrainer($this->getReference('trainer3'));
        $manager->persist($object);

        $this->addReference("npc3", $object);

        $object->setName('Morgane');
        $object->setProfession('Champion');
        $object->setText('J\'aime les pokémons psy !');
        $object->setTrainer($this->getReference('trainer6'));
        $manager->persist($object);

        $this->addReference("npc6", $object);

        $object->setName('Auguste');
        $object->setProfession('Champion');
        $object->setText('J\'aime les pokémons augustes !');
        $object->setTrainer($this->getReference('trainer7'));
        $manager->persist($object);

        $this->addReference("npc7", $object);


        $manager->flush();


    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}

?>