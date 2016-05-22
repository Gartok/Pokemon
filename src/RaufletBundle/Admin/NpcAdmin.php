<?php
// src/AppBundle/Admin/PostAdmin.php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class NpcAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array(
                'label' => 'Nom'
            ))
            ->add('profession', 'text', array(
                'label' => 'Profession'
            ))
            ->add('text', 'text', array(
                'label' => 'Texte'
            ))
            ->add('trainer', 'entity', array(
                'class' => 'RaufletBundle\Entity\Trainer',
                'choice_label' => 'name'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('profession')
            ->add('text')
            ->add('objects.name')
            ->add('trainer.name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('name')
            ->add('profession')
            ->add('text')
            ->add('objects.name')
            ->add('trainer.name')
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('profession')
            ->add('text')
            ->add('objects.name')
            ->add('trainer.name')
        ;
    }
}