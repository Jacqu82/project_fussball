<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Validator\Constraints\ValueExists;

class RecoveryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'forms',
                    'placeholder' => 'Adres e-mail'
                ],
                'constraints' => new ValueExists(['field' => 'email',
                    'message' => 'Podany adres e-mail nie istnieje w bazie danych!'])
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Zmień hasło',
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}
