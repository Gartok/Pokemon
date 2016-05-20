<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PokemonsTypeAdmin extends AbstractAdmin
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
                'choice_label' => 'name'
            ))
            ->add('zone', 'entity', array(
                'class' => 'RaufletBundle\Entity\Zone',
                'choice_label' => 'name',
                'multiple' => true
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('attack')
            ->add('attackSpe')
            ->add('defence')
            ->add('defenceSpe')
            ->add('speed')
            ->add('life')
            ->add('types')
            ->add('pokedex')
            ->add('zone')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('attack')
            ->add('attackSpe')
            ->add('defence')
            ->add('defenceSpe')
            ->add('speed')
            ->add('life')
            ->add('types')
            ->add('pokedex')
            ->add('zone')
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
            ->add('types')
            ->add('pokedex')
            ->add('zone')
        ;
    }
}