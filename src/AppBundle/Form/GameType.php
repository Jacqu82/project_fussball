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
            ->add('teamA', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\TeamA'
            ])
            ->add('goalA', NumberType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'GoalA']
            ])
            ->add('teamB', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\TeamB'
            ])
            ->add('goalB', NumberType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'GoalB']
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
