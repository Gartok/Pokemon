<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Attack;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AttackLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Attack();

        $object->setName('Abîme');
        $object->setAccurate(30);
        $object->setPower(200);
        $object->setType($this->getReference('type1'));
        $manager->persist($object);

        $this->addReference("attack1", $object);

        $object = new Attack();

        $object->setName('Acidarmure');
        $object->setAccurate(0);
        $object->setPower(0);
        $object->setType($this->getReference('type2'));
        $manager->persist($object);

        $this->addReference("attack2", $object);

        $object = new Attack();

        $object->setName('Acide');
        $object->setAccurate(40);
        $object->setPower(100);
        $object->setType($this->getReference('type10'));
        $manager->persist($object);

        $this->addReference("attack3", $object);

        $object = new Attack();

        $object->setName('Adaptation');
        $object->setAccurate(0);
        $object->setPower(0);
        $object->setType($this->getReference('type8'));
        $manager->persist($object);

        $this->addReference("attack4", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 7;
    }
}

?>