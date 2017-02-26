<?php

namespace AppBundle\Form\Type\Movie;

use AppBundle\Entity\Movie\Dvd;
use AppBundle\Form\Type\MovieType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class DvdType
 * @package AppBundle\Form\Type
 */
class DvdType extends MovieType
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
            'data_class' => Dvd::class,
        ));
    }
}
