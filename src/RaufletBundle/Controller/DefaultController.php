<?php

namespace RaufletBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Function to enable to get all informations about a Game
     *
     * @Route("/request", name="request_database")
     */
    public function requestAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        if($request->isXmlHttpRequest()) // On vérifie la présence d'une requete Ajax
        {
            $sql = $request->get('request');

            if ($sql != null)
            {
                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare($sql);
                $statement->execute();

                $results = $statement->fetchAll();

                dump($statement);

                return new JsonResponse(array("result" => $this->container->get('serializer')->serialize($results, 'json')));
            }

        }

        return new Response("Erreur lors de la requete Ajax", 400);
    }
}
