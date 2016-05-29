<?php

namespace RaufletBundle\Controller;

use RaufletBundle\Entity\Pokemons;
use RaufletBundle\Entity\PokemonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class TrainerController extends Controller
{
    /**
     * Show Generator View.
     *
     * @Route("/generator")
     * @Method({"GET", "POST"})
     */
    public function generatorAction(Request $request)
    {
        $pokemonType = new PokemonType();

        $form = $this->createForm('RaufletBundle\Form\PokemonTypeType', $pokemonType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($pokemonType);
            $em->flush();

            return $this->redirectToRoute('rauflet_trainer_generatorpokemon', array('id' => $pokemonType->getId()));
        }

        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $types = $em->getRepository('RaufletBundle:Type')->findAll();
        $evolutions = $em->getRepository('RaufletBundle:PokemonType')->findAll();

        return $this->render('RaufletBundle:Trainer:generator.html.twig', array(
            'user' => $user,
            'types' => $types,
            'form' => $form->createView(),
            'pokemonType' => $pokemonType,
            'evolutions' => $evolutions
        ));
    }

    /**
     * Show Generator View.
     *
     * @Route("/generator/pokemontype/{id}")
     * @Method({"GET", "POST"})
     */
    public function generatorPokemonAction(Request $request, PokemonType $pokemonType)
    {
        $pokemon = new Pokemons();

        $form = $this->createForm('RaufletBundle\Form\PokemonsType', $pokemon);
        $form->handleRequest($request);
        $user = $this->getUser();
        $pokemon->setType($pokemonType);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $pokemon->setTrainer($user);
            $em->persist($pokemon);
            $em->flush();

            return $this->redirectToRoute('sonata_user_profile_show');
        }

        $em = $this->getDoctrine()->getManager();


        $attacks = $em->getRepository('RaufletBundle:Attack')->findAll();

        return $this->render('RaufletBundle:Pokemon:generator.html.twig', array(
            'user' => $user,
            'attacks' => $attacks,
            'form' => $form->createView(),
            'pokemonType' => $pokemonType
        ));
    }

    /**
     * Show Generator View.
     *
     * @Route("/bag")
     */
    public function bagAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $objects = $em->getRepository('RaufletBundle:Objects')->findByTrainer($user->getId());

        return $this->render('RaufletBundle:Trainer:bag.html.twig', array(
            'user' => $user,
            'objects' => $objects
        ));
    }

    /**
     * Show Generator View.
     *
     * @Route("/pokemon")
     */
    public function pokemonAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        $pokemons = $em->getRepository('RaufletBundle:Pokemons')->findByTrainer($user->getId());

        return $this->render('RaufletBundle:Trainer:pokemon.html.twig', array(
            'user' => $user,
            'pokemons' => $pokemons
        ));
    }
}
