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
                'label' => 'Nom du badge'
            ))
            ->add('master', 'entity', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'choice_label' => 'name',
                'label' => 'Maitre de l\'arène'
            ))
            ->add('arena', 'entity', array(
                'class' => 'RaufletBundle\Entity\Arena',
                'choice_label' => 'name',
                'label' => 'Arène'
            ))
            ->add('zone', 'entity', array(
                'class' => 'RaufletBundle\Entity\Zone',
                'choice_label' => 'name',
                'label' => 'Zone'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('master.name')
            ->add('arena.name')
            ->add('zone.name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name', null, array('label' => 'Nom du Badge'))
            ->add('master.name', null, array('label' => 'Maitre d\'arène'))
            ->add('arena.name', null, array('label' => 'Nom de l\'arène'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name.name')
            ->add('master.name')
            ->add('arena.name')
            ->add('zone.name')
        ;
    }
}