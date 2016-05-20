<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Trainer;
use RaufletBundle\Entity\WeakAgainst;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class WeakAgainstLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new WeakAgainst();

        $object->setModifier('2.5');
        $object->setFirstType($this->getReference("type1"));
        $object->setSecondType($this->getReference("type15"));
        $manager->persist($object);

        $this->addReference("weak1", $object);

        $object = new WeakAgainst();

        $object->setName('2.25');
        $object->setFirstType($this->getReference("type1"));
        $object->setSecondType($this->getReference("type11"));
        $manager->persist($object);

        $this->addReference("weak2", $object);

        $object = new WeakAgainst();

        $object->setModifier('1.95');
        $object->setFirstType($this->getReference("type2"));
        $object->setSecondType($this->getReference("type6"));
        $manager->persist($object);

        $this->addReference("weak3", $object);

        $object = new WeakAgainst();

        $object->setModifier('1.5');
        $object->setFirstType($this->getReference("type2"));
        $object->setSecondType($this->getReference("type2"));
        $manager->persist($object);

        $this->addReference("weak4", $object);

        $object = new WeakAgainst();

        $object->setModifier('3');
        $object->setFirstType($this->getReference("type3"));
        $object->setSecondType($this->getReference("type4"));
        $manager->persist($object);

        $this->addReference("weak5", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 11;
    }
}

?>