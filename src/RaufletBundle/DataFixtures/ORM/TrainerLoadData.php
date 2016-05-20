<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TrainerLoadData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
{

    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $object = new Trainer();

        $object->setUsername('Pierre');
        $object->setPlainPassword('pierre');
        $object->setName('Pierre');
        $object->setEmail('pierre@champion.com');
        $object->setEnabled(true);

        $manager->persist($object);

        $this->addReference("trainer1", $object);

        $object = new Trainer();

        $object->setUsername('Ondine');
        $object->setPlainPassword('ondine');
        $object->setName('Ondine');
        $object->setEmail('ondine@pokemon.com');
        $object->setEnabled(true);

        $manager->persist($object);
        $this->addReference("trainer2", $object);

        $object = new Trainer();

        $object->setUsername('sacha');
        $object->setPlainPassword('sacha');
        $object->setName('Sacha');
        $object->setEmail('sacha@pokemon.com');
        $object->setEnabled(true);

        $manager->persist($object);
        $this->addReference("trainer4", $object);

        $object->setUsername('major');
        $object->setPlainPassword('major');
        $object->setName('Majkor');
        $object->setEmail('majorbob@pokemon.com');
        $object->setEnabled(true);

        $manager->persist($object);
        $this->addReference("trainer3", $object);

        $manager->flush();
    }
}

?>