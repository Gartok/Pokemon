<?php

namespace RaufletBundle\Form;

use DateTime;
use Proxies\__CG__\RaufletBundle\Entity\PokemonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surname', 'text', array("attr" => array('class' => '')))
            ->add('level', 'number', array("data" => 1))
            ->add('catchDate', 'datetime', array("data" => new DateTime()))
            ->add('firstAttack', 'entity', array(
                'class'   => 'RaufletBundle\Entity\Attack',
                'choice_label' => "name",
            ))
            ->add('secondAttack', 'entity', array(
                'class'   => 'RaufletBundle\Entity\Attack',
                'choice_label' => "name",
            ))
            ->add('thirdAttack', 'entity', array(
                'class'   => 'RaufletBundle\Entity\Attack',
                'choice_label' => "name",
            ))
            ->add('fourthAttack', 'entity', array(
                'class'   => 'RaufletBundle\Entity\Attack',
                'choice_label' => "name",
            ))
            ->add('type', 'entity', array(
                'class'   => 'RaufletBundle\Entity\PokemonType',
                'choice_label' => "name",
            ))
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary'), 'label' => 'Sauvegarder le Pokemon'));
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RaufletBundle\Entity\Pokemons'
        ));
    }
}
