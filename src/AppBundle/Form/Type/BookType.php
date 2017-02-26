<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class BookType
 * @package AppBundle\Form\Type
 */
class BookType extends AbstractType
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
            ->add('isnbNumber', NumberType::class, [
                    'required' => true,
                    'label' => 'Numéro Isnb'
                ]
            )
            ->add('author', TextType::class, [
                    'required' => false,
                    'label' => 'Auteur'
                ]
            )
            ->add('parutionDate', DateType::class, [
                    'required' => false,
                    'label' => 'Date de parution'
                ]
            )
            ->add('numberPage', NumberType::class, [
                    'required' => false,
                    'label' => 'Nombre de pages'
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
            );
    }
}
