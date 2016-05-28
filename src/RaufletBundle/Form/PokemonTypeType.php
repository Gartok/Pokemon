<?php

namespace RaufletBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonTypeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Nom du type :'))
            ->add('attack', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Attaque :'))
            ->add('attackSpe', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Attaque Spe :'))
            ->add('defence', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Défence :'))
            ->add('defenceSpe', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Défence Spécial :'))
            ->add('speed', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Vitesse :'))
            ->add('life', 'number', array('attr'   =>  array('class' => 'col-xs-12 col-md-4'), 'label' => 'Vie :'))
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary'), 'label' => 'Sauvegarder le Type'))
            ->add('types', 'entity', array(
                'class'   => 'RaufletBundle\Entity\Type',
                'choice_label' => "name",
                 'multiple' => true,
            ));

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RaufletBundle\Entity\PokemonType'
        ));
    }
}
