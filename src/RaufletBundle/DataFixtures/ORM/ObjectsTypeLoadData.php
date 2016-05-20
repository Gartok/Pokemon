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
use RaufletBundle\Entity\ObjectsType;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ObjectsTypeLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new ObjectsType();

        $object->setName('Standards');
        $manager->persist($object);

        $this->addReference("objecttype1", $object);

        $object = new ObjectsType();

        $object->setName('Médicaments');
        $manager->persist($object);

        $this->addReference("objecttype2", $object);

        $object = new ObjectsType();

        $object->setName('Balls');
        $manager->persist($object);

        $this->addReference("objecttype3", $object);

        $object = new ObjectsType();

        $object->setName('CT/CS');
        $manager->persist($object);

        $this->addReference("objecttype4", $object);

        $object = new ObjectsType();

        $object->setName('Combat');
        $manager->persist($object);

        $this->addReference("objecttype5", $object);

        $object = new ObjectsType();

        $object->setName('Rares');
        $manager->persist($object);

        $this->addReference("objecttype6", $object);


        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}

?>