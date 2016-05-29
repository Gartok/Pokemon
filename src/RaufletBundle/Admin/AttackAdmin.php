<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class AttackAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Nom de l\'attaque'
            ))
            ->add('power', 'number', array(
                'label' => 'Puissance'
            ))
            ->add('accurate', 'number', array(
                'label' => 'Precision'
            ))
            ->add('type', 'entity', array(
                'class' => 'RaufletBundle\Entity\Type',
                'choice_label' => 'name',
                'label' => 'Type'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Nom de l\'attaque'))
            ->add('power', null, array('label' => 'Puissance'))
            ->add('accurate', null, array('label' => 'Precision'))
            ->add('type.name', null, array('label' => 'Type'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id', null, array('label' => 'Index'))
            ->add('name', null, array('label' => 'Nom de l\'attaque'))
            ->add('power', null, array('label' => 'Puissance'))
            ->add('accurate', null, array('label' => 'Precision'))
            ->add('type.name', null, array('label' => 'Type'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('power')
            ->add('accurate')
            ->add('type.name')
        ;
    }
}