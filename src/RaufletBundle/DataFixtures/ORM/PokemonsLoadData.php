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
use RaufletBundle\Entity\Pokemons;
use RaufletBundle\Entity\PokemonType;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PokemonsLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $object = new Pokemons();

        $object->setSurname('Bulbiiii');
        $object->setCatchDate(new \DateTime());
        $object->setType($this->getReference("pokemontype1"));
        $object->setFirstAttack($this->getReference("attack1"));
        $object->setSecondAttack($this->getReference("attack2"));
        $object->setThirdAttack($this->getReference("attack3"));
        $object->setFourthAttack($this->getReference("attack4"));
        $object->setLevel(99);
        $object->setTrainer($this->getReference("trainer4"));

        $manager->persist($object);

        $this->addReference("pokemon1", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 9;
    }
}

?>