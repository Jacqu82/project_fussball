<?php

namespace AppBundle\Form;

use AppBundle\Entity\User\User;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Nazwa użytkownika'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Adres e-mail'
                ]
            ])
            ->add('password', PasswordType::class, [
                'label' => ' ',
                'attr' => [
                    'placeholder' => 'Hasło'
                ]
            ]);

        if ($options['edit']) {
            $builder
                ->remove('password')
                ->add('submit', SubmitType::class, [
                    'label' => 'Edytuj konto',
                    'attr' => ['class' => 'btn btn-success']
                ]);
        }
    }

//    /**
//     * @return string
//     */
//    public function getName()
//    {
//        return 'user';
//    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'edit' => false
        ]);
    }
}
