<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Trainer;
use RaufletBundle\Entity\Type;
use RaufletBundle\Entity\Win;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class WinLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Win();

        $object->setObtention(new \DateTime());
        $object->setTrainer($this->getReference("trainer1"));
        $object->setBadge($this->getReference("badge1"));
        $manager->persist($object);

        $this->addReference("win1", $object);

        $object = new Win();

        $object->setObtention(new \DateTime());
        $object->setTrainer($this->getReference("trainer4"));
        $manager->persist($object);

        $this->addReference("win2", $object);

        $object = new Win();

        $object->setObtention(new \DateTime());
        $object->setTrainer($this->getReference("trainer2"));
        $object->setBadge($this->getReference("badge2"));
        $manager->persist($object);

        $this->addReference("win3", $object );

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 15;
    }
}

?>