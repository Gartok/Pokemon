<?php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class WinAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('obtention', 'datetime', array(
                'label' => 'Date de Victoire'
            ))
            ->add('trainer', 'entity', array(
                'class' => 'RaufletBundle\Entity\WeakAgainst',
                'choice_label' => 'name',
            ))
            ->add('badge', 'entity', array(
                'class' => 'RaufletBundle\Entity\WeakAgainst',
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