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
                'class' => 'RaufletBundle\Entity\Trainer',
                'choice_label' => 'name'
            ))
            ->add('firstAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name'
            ))
            ->add('secondAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name'
            ))
            ->add('thirdAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name'
            ))
            ->add('fourthAttack', 'entity', array(
                'class' => 'RaufletBundle\Entity\Attack',
                'choice_label' => 'name'
            ))
            ->add('type', 'entity', array(
                'class' => 'RaufletBundle\Entity\PokemonType',
                'choice_label' => 'name'
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
            ->add('trainer')
            ->add('firstAttack')
            ->add('secondAttack')
            ->add('thirdAttack')
            ->add('fourthAttack')
            ->add('type')

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('surname')
            ->add('level')
            ->add('catchDate')
            ->add('trainer')
            ->add('firstAttack')
            ->add('secondAttack')
            ->add('thirdAttack')
            ->add('fourthAttack')
            ->add('type')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('surname')
            ->add('level')
            ->add('catchDate')
            ->add('trainer')
            ->add('firstAttack')
            ->add('secondAttack')
            ->add('thirdAttack')
            ->add('fourthAttack')
            ->add('type')
        ;
    }
}