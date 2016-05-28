<?php
namespace AppBundle\DataFixtures\ORM;

use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserLoadData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
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
        $object = new User();

        $object->setUsername('Pierre');
        $object->setPlainPassword('pierre');
        $object->setName('Pierre');
        $object->setEmail('pierre@champion.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_USER'));

        $manager->persist($object);

        $this->addReference("trainer1", $object);

        $object = new User();

        $object->setUsername('Ondine');
        $object->setPlainPassword('ondine');
        $object->setName('Ondine');
        $object->setEmail('ondine@pokemon.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_USER'));

        $manager->persist($object);
        $this->addReference("trainer2", $object);

        $object = new User();

        $object->setUsername('sacha');
        $object->setPlainPassword('sacha');
        $object->setName('Sacha');
        $object->setEmail('sacha@pokemon.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_ADMIN'));
        $manager->persist($object);
        $this->addReference("trainer4", $object);

        $object = new User();

        $object->setUsername('major');
        $object->setPlainPassword('major');
        $object->setName('Major');
        $object->setEmail('majorbob@pokemon.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_USER'));

        $manager->persist($object);
        $this->addReference("trainer3", $object);

        $object = new User();

        $object->setUsername('morgane');
        $object->setPlainPassword('morgane');
        $object->setName('Morgane');
        $object->setEmail('morgane@pokemon.com');
        $object->setEnabled(true);

        $manager->persist($object);
        $this->addReference("trainer6", $object);

        $object = new User();

        $object->setUsername('auguste');
        $object->setPlainPassword('auguste');
        $object->setName('Auguste');
        $object->setEmail('auguste@pokemon.com');
        $object->setEnabled(true);
        $object->setRoles(array('ROLE_USER'));

        $manager->persist($object);
        $this->addReference("trainer7", $object);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}

?>