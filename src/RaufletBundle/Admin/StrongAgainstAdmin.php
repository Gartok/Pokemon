<?php

namespace RaufletBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class StrongAgainstAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('modifier', 'number', array(
                'label' => 'Modificateur',
                'scale' => 2
            ))
            ->add('firstType', 'entity', array(
                'label' => 'Type Attaquant',
                'class' => 'RaufletBundle\Entity\Type',
                'choice_label' => 'name',
            ))
            ->add('secondType', 'entity', array(
                'label' => 'Type Défenseur',
                'class' => 'RaufletBundle\Entity\Type',
                'choice_label' => 'name'
            ))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('modifier')
            ->add('firstType.name')
            ->add('secondType.name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('modifier', null, array('label' => 'Modificateur'))
            ->add('firstType.name', null, array('label' => 'Type Attaquant'))
            ->add('secondType.name', null, array('label' => 'Type Défenseur'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('modifier')
            ->add('firstType.name')
            ->add('secondType.name')
        ;
    }
}