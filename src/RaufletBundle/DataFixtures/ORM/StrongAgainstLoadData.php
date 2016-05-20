<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\StrongAgainst;
use RaufletBundle\Entity\Trainer;
use RaufletBundle\Entity\WeakAgainst;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StrongAgainstLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new StrongAgainst();

        $object->setModifier('2.5');
        $object->setFirstType($this->getReference("type15"));
        $object->setSecondType($this->getReference("type1"));
        $manager->persist($object);

        $this->addReference("strong1", $object);

        $object = new StrongAgainst();

        $object->setModifier('2.25');
        $object->setFirstType($this->getReference("type11"));
        $object->setSecondType($this->getReference("type1"));
        $manager->persist($object);

        $this->addReference("strong2", $object);

        $object = new StrongAgainst();

        $object->setModifier('1.95');
        $object->setFirstType($this->getReference("type6"));
        $object->setSecondType($this->getReference("type2"));
        $manager->persist($object);

        $this->addReference("strong3", $object);

        $object = new StrongAgainst();

        $object->setModifier('1.5');
        $object->setFirstType($this->getReference("type3"));
        $object->setSecondType($this->getReference("type4"));
        $manager->persist($object);

        $this->addReference("strong4", $object);

        $object = new StrongAgainst();

        $object->setModifier('3');
        $object->setFirstType($this->getReference("type3"));
        $object->setSecondType($this->getReference("type9"));
        $manager->persist($object);

        $this->addReference("strong5", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 10;
    }
}

?>