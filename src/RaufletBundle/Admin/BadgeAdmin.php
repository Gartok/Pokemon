<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class BadgeAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Nom de l\'object'
            ))
            ->add('master', 'entity', array(
                'class' => 'RaufletBundle\Entity\Trainer',
                'choice_label' => 'name'
            ))
            ->add('arena', 'entity', array(
                'class' => 'RaufletBundle\Entity\Arena',
                'choice_label' => 'name'
            ))
            ->add('zone', 'entity', array(
                'class' => 'RaufletBundle\Entity\Zone',
                'choice_label' => 'name'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('master')
            ->add('arena')
            ->add('zone')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('master')
            ->add('arena')
            ->add('zone')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('master')
            ->add('arena')
            ->add('zone')
        ;
    }
}