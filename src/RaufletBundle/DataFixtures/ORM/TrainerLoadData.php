<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use RaufletBundle\Entity\Trainer;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadTrainerData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface
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

        $object->setUsername('sacha');
        $object->setPlainPassword('sacha');
        $object->setName('Sacha');
        $object->setEmail('sacha@pokemon.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_ADMIN'));

        $manager->persist($object);
        $manager->flush();
    }
}

?>