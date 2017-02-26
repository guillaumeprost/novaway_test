<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class MovieType
 * @package AppBundle\Form\Type
 */
abstract class MovieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('title', TextType::class, [
                    'required' => true,
                    'label' => 'Titre'
                ]
            )
            ->add('isanNumber', NumberType::class, [
                    'required' => true,
                    'label' => 'Numéro Isan'
                ]
            )
            ->add('director', TextType::class, [
                    'required' => false,
                    'label' => 'Réalisateur'
                ]
            )
            ->add('releaseDate', DateType::class, [
                    'required' => false,
                    'label' => 'Date de sortie'
                ]
            )
            ->add('time', TextType::class, [
                    'required' => false,
                    'label' => 'Durée'
                ]
            )
            ->add('summary', TextareaType::class, [
                    'required' => false,
                    'label' => 'Résumé'
                ]
            )
            ->add('price', NumberType::class, [
                    'required' => false,
                    'label' => 'Prix'
                ]
            )
            ->add('actors', TextareaType::class, [
                    'required' => false,
                    'label' => 'Acteurs'
                ]
            );
    }
}
