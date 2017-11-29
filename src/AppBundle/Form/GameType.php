<?php

namespace AppBundle\Form;

use AppBundle\Entity\Game;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GameType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('round', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\Round'
            ])
            ->add('homeTeam', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\HomeTeam'
            ])
            ->add('goalsHomeTeam', NumberType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Liczba goli drużyny domowej']
            ])
            ->add('awayTeam', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\AwayTeam'
            ])
            ->add('goalsAwayTeam', NumberType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Liczba goli drużyny wyjazdowej']
            ])
            ->add('date', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Data']
            ])
            ->add('hour', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Godzina']
            ])
            ->add('save', SubmitType::class, array(
                'label' => 'Dodaj',
                'attr' => [
                    'class' => 'btn btn-success'
                ]));

        if ($options['edit']) {
            $builder
                ->add('save', SubmitType::class, array(
                'label' => 'Edytuj',
                'attr' => [
                    'class' => 'btn btn-warning'
                ]));
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
            'edit' => false
            ]);
    }
}
