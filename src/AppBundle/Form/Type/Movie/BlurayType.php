<?php

namespace AppBundle\Form\Type\Movie;

use AppBundle\Entity\Movie\Bluray;
use AppBundle\Form\Type\MovieType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class BlurayType
 * @package AppBundle\Form\Type
 */
class BlurayType extends MovieType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class' => Bluray::class,
        ));
    }
}
