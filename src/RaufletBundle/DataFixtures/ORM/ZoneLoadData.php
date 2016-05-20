<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Trainer;
use RaufletBundle\Entity\Type;
use RaufletBundle\Entity\Win;
use RaufletBundle\Entity\Zone;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ZoneLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Zone();

        $object->setName("Celadopole");
        $object->addPokemonType($this->getReference("pokemontype1"));
        $object->addBadge($this->getReference("badge1"));
        $manager->persist($object);

        $this->addReference("zone1");

        $object = new Zone();

        $object->setName("Lavanville");
        $object->addPokemonType($this->getReference("pokemontype2"));
        $object->addPokemonType($this->getReference("pokemontype3"));
        $object->addPokemonType($this->getReference("pokemontype4"));
        $manager->persist($object);

        $this->addReference("zone2");

        $object = new Zone();

        $object->setName("Parmanie");
        $object->addPokemonType($this->getReference("pokemontype1"));
        $object->addBadge($this->getReference("badge2"));
        $manager->persist($object);

        $this->addReference("zone3");

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 12;
    }
}

?>