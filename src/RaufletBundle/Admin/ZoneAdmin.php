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
                'choice_label' => 'name',
            ))
            ->add('pokemonTypes', 'entity', array(
                'class' => 'RaufletBundle\Entity\PokemonTypes',
                'choice_label' => 'name',
            ))
            ->add('badges', 'entity', array(
                'class' => 'RaufletBundle\Entity\Badge',
                'choice_label' => 'name',
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('obtention')
            ->add('trainer')
            ->add('badge')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('obtention')
            ->add('trainer')
            ->add('badge')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('obtention')
            ->add('trainer')
            ->add('badge')
        ;
    }
}