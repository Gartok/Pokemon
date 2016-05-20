<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Trainer;
use RaufletBundle\Entity\Type;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TypeLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Type();

        $object->setName("Combat");

        $manager->persist($object);

        $this->addReference("type1", $object);

        $object = new Type();

        $object->setName("Dragon");

        $manager->persist($object);

        $this->addReference("type2", $object);

        $object = new Type();

        $object->setName("Eau");

        $manager->persist($object);

        $this->addReference("type3", $object);

        $object = new Type();

        $object->setName("Electrique");

        $manager->persist($object);

        $this->addReference("type4", $object);

        $object = new Type();

        $object->setName("Feu");

        $manager->persist($object);

        $this->addReference("type5", $object);

        $object = new Type();

        $object->setName("Glace");

        $manager->persist($object);

        $this->addReference("type6", $object);

        $object = new Type();

        $object->setName("Insecte");

        $manager->persist($object);

        $this->addReference("type7", $object);

        $object = new Type();

        $object->setName("Plante");

        $manager->persist($object);

        $this->addReference("type8", $object);

        $object = new Type();

        $object->setName("Poison");

        $manager->persist($object);

        $this->addReference("type9", $object);

        $object = new Type();

        $object->setName("Psy");

        $manager->persist($object);

        $this->addReference("type10", $object);

        $object = new Type();

        $object->setName("Roche");

        $manager->persist($object);

        $this->addReference("type11", $object);

        $object = new Type();

        $object->setName("Sol");

        $manager->persist($object);

        $this->addReference("type12", $object);

        $object = new Type();

        $object->setName("Spectre");

        $manager->persist($object);

        $this->addReference("type13", $object);

        $object = new Type();

        $object->setName("Vol");

        $manager->persist($object);

        $this->addReference("type15", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 6;
    }
}

?>