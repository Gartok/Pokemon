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

class PokemonsTypeLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $object = new PokemonType();

        $object->setName('Florizarre');
        $object->setLife(80);
        $object->setAttack(82);
        $object->setDefence(83);
        $object->setAttackSpe(100);
        $object->setDefenceSpe(100);
        $object->setSpeed(80);
        $object->addType($this->getReference('type8'));
        $object->addType($this->getReference('type9'));
//        $object->addZone($this->getReference('zone1'));
        $object->setPokedex($this->getReference('pokedex3'));

        $manager->persist($object);

        $this->addReference("pokemontype3", $object);


        $object = new PokemonType();

        $object->setName('Herbizarre');
        $object->setLife(60);
        $object->setAttack(62);
        $object->setDefence(63);
        $object->setAttackSpe(80);
        $object->setDefenceSpe(80);
        $object->setSpeed(60);
        $object->addEvolution($this->getReference('pokemontype3'));
        $object->setPokedex($this->getReference('pokedex2'));
        $object->addType($this->getReference('type8'));
        $object->addType($this->getReference('type9'));
//        $object->addZone($this->getReference('zone1'));

        $manager->persist($object);

        $this->addReference("pokemontype2", $object);

        $object = new PokemonType();

        $object->setName('Reptincel');
        $object->setLife(58);
        $object->setAttack(64);
        $object->setDefence(58);
        $object->setAttackSpe(80);
        $object->setDefenceSpe(65);
        $object->setSpeed(80);
        $object->addType($this->getReference('type5'));
//        $object->addZone($this->getReference('zone2'));
        $object->setPokedex($this->getReference('pokedex5'));

        $manager->persist($object);

        $this->addReference("pokemontype5", $object);

        $object = new PokemonType();

        $object->setName('Bulbizarre');
        $object->setLife(45);
        $object->setAttack(49);
        $object->setDefence(49);
        $object->setAttackSpe(65);
        $object->setDefenceSpe(65);
        $object->setSpeed(45);
        $object->addEvolution($this->getReference('pokemontype2'));
        $object->setPokedex($this->getReference('pokedex1'));
        $object->addType($this->getReference('type8'));
//        $object->addType($this->getReference('zone1'));

        $manager->persist($object);

        $this->addReference("pokemontype1", $object);

        $object = new PokemonType();

        $object->setName('Salamèche');
        $object->setLife(39);
        $object->setAttack(52);
        $object->setDefence(43);
        $object->setAttackSpe(60);
        $object->setDefenceSpe(50);
        $object->setSpeed(65);
        $object->addType($this->getReference('type5'));
        $object->addEvolution($this->getReference('pokemontype5'));
//        $object->addZone($this->getReference('zone2'));
        $object->setPokedex($this->getReference('pokedex4'));

        $manager->persist($object);

        $this->addReference("pokemontype4", $object);



        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 8;
    }
}

?>