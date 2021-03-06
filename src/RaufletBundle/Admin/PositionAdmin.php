<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PositionAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('x', 'number', array(
                'label' => 'Position X'
            ))
            ->add('y', 'number', array(
                'label' => 'Position Y'
            ))
            ->add('zone', 'entity', array(
                'class' => 'RaufletBundle\Entity\Zone',
                'choice_label' => 'name',
                'label' => 'Nom de la Zone'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('x')
            ->add('y')
            ->add('zone.name', null, array('label' => 'Nom de la Zone'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('x')
            ->add('y')
            ->add('zone.name', null, array('label' => 'Nom de la Zone'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('x')
            ->add('y')
            ->add('zone.name')
        ;
    }
}