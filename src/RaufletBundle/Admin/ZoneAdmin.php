<?php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class ZoneAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Nom de la Zone'
            ))
            ->add('positions', 'entity', array(
                'class' => 'RaufletBundle\Entity\Position',
                'multiple' => true
            ))
            ->add('pokemonTypes', 'entity', array(
                'class' => 'RaufletBundle\Entity\PokemonType',
                'choice_label' => 'name',
                'multiple' => true
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Nom'))
            ->add('positions', null, array('label' => 'Positions'))
            ->add('pokemonTypes', null, array('associated_property' => 'name', 'label' => 'Zones'), 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'choice_label' => 'name',
            ))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name', null, array('label' => 'Nom'))
            ->add('positions', null, array('label' => 'Positions'))
            ->add('pokemonTypes', null, array('associated_property' => 'name', 'label' => 'Type de Pokemon'), 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'choice_label' => 'name',
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('positions')
            ->add('badges.name')
        ;
    }
}