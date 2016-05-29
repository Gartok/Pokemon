<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PokemonsAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('surname', 'text', array(
                'label' => 'Surnom'
            ))
            ->add('level', 'number', array(
                'label' => 'Niveau'
            ))
            ->add('catchDate', 'datetime', array(
                'label' => 'Date de Capture'
            ))
            ->add('trainer', 'entity', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'choice_label' => 'name',
                'label' => 'Dresseur'
            ))
            ->add('firstAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name',
                'label' => 'Attaque 1'
            ))
            ->add('secondAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name',
                'label' => 'Attaque 2'
            ))
            ->add('thirdAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name',
                'label' => 'Attaque 3'
            ))
            ->add('fourthAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name',
                'label' => 'Attaque 4'
            ))
            ->add('type', 'entity', array(
                'class' => 'RaufletBundle\Entity\PokemonType',
                'choice_label' => 'name',
                'label' => 'Type'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('surname')
            ->add('level')
            ->add('catchDate')
            ->add('trainer.name')
            ->add('firstAttack.name')
            ->add('secondAttack.name')
            ->add('thirdAttack.name')
            ->add('fourthAttack.name')
            ->add('type.name')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('surname', null, array('label' => 'Surnom'))
            ->add('level', null, array('label' => 'Niveau'))
            ->add('catchDate', null, array('label' => 'Date de Capture'))
            ->add('trainer.name', null, array('label' => 'Nom du Dresseur'))
            ->add('firstAttack.name', null, array('label' => 'Attaque 1'))
            ->add('secondAttack.name', null, array('label' => 'Attaque 2'))
            ->add('thirdAttack.name', null, array('label' => 'Attaque 3'))
            ->add('fourthAttack.name', null, array('label' => 'Attaque 4'))
            ->add('type.name', null, array('label' => 'Type'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('surname')
            ->add('level')
            ->add('catchDate')
            ->add('trainer.name')
            ->add('firstAttack.name')
            ->add('secondAttack.name')
            ->add('thirdAttack.name')
            ->add('fourthAttack.name')
            ->add('type.name')
        ;
    }
}