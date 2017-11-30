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
                'attr' => ['class' => 'file']
            ])
            ->add('name', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Nazwa'
                ]
            ])
            ->add('content', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Opis'
                ]
            ])
            ->add('createdAt', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Data założenia'
                ]
            ])
            ->add('colours', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Barwy klubowe'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Adres klubu'
                ]
            ])
            ->add('page', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Strona WWW'
                ]
            ])
            ->add('stadium', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Stadion'
                ]
            ])
            ->add('capacity', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Pojemność stadionu'
                ]
            ])
            ->add('chairman', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Prezes'
                ]
            ])
            ->add('coach', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Trener'
                ]
            ])
            ->add('longitude', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Długość geograficzna'
                ]
            ])
            ->add('latitude', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Szerokość geograficzna'
                ]
            ])
            ->add('save', SubmitType::class, array(
                'label' => 'Dodaj',
                'attr' => [
                    'class' => 'btn btn-success'
                ]));

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
                'label' => 'Edytuj',
                'attr' => [
                    'class' => 'btn btn-warning'
                ]));
        }

        if ($options['noPhoto']) {
            $builder
                ->remove('emblem');
        }

        if ($options['justPhoto']) {
            $builder
                ->remove('name')
                ->remove('content')
                ->remove('createdAt')
                ->remove('colours')
                ->remove('address')
                ->remove('page')
                ->remove('stadium')
                ->remove('capacity')
                ->remove('chairman')
                ->remove('coach')
                ->remove('longitude')
                ->remove('latitude');
        }
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
