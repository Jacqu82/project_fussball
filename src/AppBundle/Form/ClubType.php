<?php

namespace AppBundle\Form;

use AppBundle\Entity\Club;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('emblem', FileType::class, [
                'label' => 'Dodaj Herb',
                'data_class' => null,
                'attr' => [
                    'class' => 'file'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Nazwa'
                ]
            ])
            ->add('createdAt', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Data założenia'
                ]
            ])
            ->add('colours', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Barwy klubowe'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Adres klubu'
                ]
            ])
            ->add('page', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Strona WWW'
                ]
            ])
            ->add('stadium', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Stadion'
                ]
            ])
            ->add('capacity', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Pojemność stadionu'
                ]
            ])
            ->add('chairman', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Prezes'
                ]
            ])
            ->add('coach', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Trener'
                ]
            ])
            ->add('save', SubmitType::class, array(
                'label' => 'Dodaj'));

        if ($options['edit']) {
            $builder
                ->add('emblem', FileType::class, [
                    'label' => 'Edytuj Herb',
                    'data_class' => null,
                    'attr' => [
                        'class' => 'file'
                    ]
                ])
                ->add('save', SubmitType::class, array(
                'label' => 'Edytuj'));
        }

        if ($options['noPhoto']) {
            $builder
                ->remove('emblem');
        }

        if ($options['justPhoto']) {
            $builder
                ->remove('name')
                ->remove('createdAt')
                ->remove('colours')
                ->remove('address')
                ->remove('page')
                ->remove('stadium')
                ->remove('capacity')
                ->remove('chairman')
                ->remove('coach');
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'club';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
            'noPhoto' => false,
            'justPhoto' => false,
            'edit' => false
            ]);
    }
}
