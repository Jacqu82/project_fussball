<?php

namespace AppBundle\Form;

use AppBundle\AppBundle;
use AppBundle\Entity\Player;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{

    /**
     * @return array
     */
    public function getChoices()
    {
        $choices = ['Bramkarz', 'Obrońca', 'Pomocnik', 'Napastnik'];

        return $choices;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Imię i nazwisko']
            ])
            ->add('position', ChoiceType::class, [
                'label' => ' ',
                'choices' => $this->getChoices(),
                'choice_label' => function ($choice) {
                    return $choice;
                }
            ])
            ->add('club', EntityType::class, [
                'label' => ' ',
                'class' => 'AppBundle\Entity\Club'
            ])
            ->add('country', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Kraj pochodzenia']
            ])
            ->add('dateOfBirth', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Data urodzenia']
            ])
            ->add('growth', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Wzrost']
            ])
            ->add('weight', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Waga']
            ])
            ->add('previousClub', TextType::class, [
                'label' => ' ',
                'attr' => ['placeholder' => 'Poprzedni klub']
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
                    'class' => 'btn btn-success'
                ]));
        }

    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'player';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Player::class,
            'edit' => false
            ]);
    }
}
