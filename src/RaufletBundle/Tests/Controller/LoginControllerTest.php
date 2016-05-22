<?php

namespace RaufletBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ObjectsControllerTest extends WebTestCase
{
    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/login');

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::loginAction',
            $client->getRequest()->attributes->get('_controller'));

        $form = $crawler->selectButton('_submit')->form(array(
            '_username'  => 'sacha',
            '_password'  => 'sacha',
        ));

        $client->submit($form);

        $crawler = $client->followRedirect(); // "/" page

        $this->assertEquals('RaufletBundle\Controller\DefaultController::indexAction',
                $client->getRequest()->attributes->get('_controller'));
    }
}
