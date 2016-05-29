<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PokemonTypeAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Nom'
            ))
            ->add('attack', 'number', array(
                'label' => 'Attaque'
            ))
            ->add('attackSpe', 'number', array(
                'label' => 'Attaque Spécial'
            ))
            ->add('defence', 'number', array(
                'label' => 'Defense'
            ))
            ->add('defenceSpe', 'number', array(
                'label' => 'Defense Spécial'
            ))
            ->add('speed', 'number', array(
                'label' => 'Vitesse'
            ))
            ->add('life', 'number', array(
                'label' => 'Vie'
            ))
            ->add('types', 'entity', array(
                'class' => 'RaufletBundle\Entity\Type',
                'choice_label' => 'name',
                'multiple' => true
            ))
            ->add('pokedex', 'entity', array(
                'class' => 'RaufletBundle\Entity\Pokedex',
                'choice_label' => 'id'
            ))
            ->add('zones', 'entity', array(
                'class' => 'RaufletBundle\Entity\Zone',
                'choice_label' => 'name',
                'multiple' => true
            ))
            ->add('evolutions', 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'property' => 'name',
                'label'    => 'Evolutions',
                'multiple' => true
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('attack', null, array('label' => 'Attaque'))
            ->add('attackSpe', null, array('label' => 'Attaque Spécial'))
            ->add('defence', null, array('label' => 'Défense'))
            ->add('defenceSpe', null, array('label' => 'Défense Spécial'))
            ->add('speed', null, array('label' => 'Vitesse'))
            ->add('life', null, array('label' => 'Vie'))
            ->add('types', null, array('associated_property' => 'name', 'label' => 'Types'), 'entity', array(
                'class'    => 'RaufletBundle:Type',
                'choice_label' => 'name',
            ))            ->add('pokedex.id')
            ->add('zones', null, array('associated_property' => 'name', 'label' => 'Zones'), 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'choice_label' => 'name',
            ))            ->add('evolutions', null, array('associated_property' => 'name', 'label' => 'Evolutions'), 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'choice_label' => 'name',
            ))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name', null, array('label' => 'Index'))
            ->add('attack', null, array('label' => 'Attaque'))
            ->add('attackSpe', null, array('label' => 'Attaque Spécial'))
            ->add('defence', null, array('label' => 'Défense'))
            ->add('defenceSpe', null, array('label' => 'Défense Spécial'))
            ->add('speed', null, array('label' => 'Vitesse'))
            ->add('life', null, array('label' => 'Vie'))
            ->add('types', null, array('associated_property' => 'name', 'label' => 'Types'), 'entity', array(
                'class'    => 'RaufletBundle:Type',
                'choice_label' => 'name',
            ))            ->add('pokedex.id')
            ->add('zones', null, array('associated_property' => 'name', 'label' => 'Zones'), 'entity', array(
                'class'    => 'RaufletBundle:PokemonType',
                'choice_label' => 'name',
            ))
            ->add('evolutions', null, array('associated_property' => 'name', 'label' => 'Evolutions'), 'entity', array(
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
            ->add('attack')
            ->add('attackSpe')
            ->add('defence')
            ->add('defenceSpe')
            ->add('speed')
            ->add('life')
            ->add('types.name')
            ->add('pokedex.id')
            ->add('zones.name')
            ->add('evolutions.name')
        ;
    }
}