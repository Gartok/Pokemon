<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Arena;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ArenaLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Arena();

        $object->setName('Arène d\'Argenta');
        $object->setPosition($this->getReference('position1'));
        $object->setBadge($this->getReference('badge1'));
        $manager->persist($object);

        $this->addReference("arena1", $object);

        $object = new Arena();

        $object->setName('Arène d\'Azuria');
        $object->setPosition($this->getReference('position2'));
        $object->setBadge($this->getReference('badge2'));
        $manager->persist($object);

        $this->addReference("arena2", $object);

        $object = new Arena();

        $object->setName('Arène de Carmin Sur Mère');
        $object->setPosition($this->getReference('position3'));
        $object->setBadge($this->getReference('badge3'));
        $manager->persist($object);

        $this->addReference("arena3", $object);

        $object = new Arena();

        $object->setName('Arène de Céladopole');
        $object->setPosition($this->getReference('position4'));
        $object->setBadge($this->getReference('badge4'));
        $manager->persist($object);

        $this->addReference("arena4", $object);

        $object = new Arena();

        $object->setName('Arène de Parmenie');
        $object->setPosition($this->getReference('position5'));
        $object->setBadge($this->getReference('badge5'));
        $manager->persist($object);

        $this->addReference("arena5", $object);

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