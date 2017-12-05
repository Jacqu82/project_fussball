<?php

namespace AppBundle\Form;

use AppBundle\Entity\User\Register;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RegisterType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('user', UserType::class, ['label' => ' '])
                ->add('recaptcha', EWZRecaptchaType::class, ['label' => ' '])
                ->add('submit', SubmitType::class, [
                    'label' => 'Utwórz konto',
                    'attr' => ['class' => 'links btn btn-success']
                ]);
    }

//    /**
//     * @return string
//     */
//    public function getName()
//    {
//        return 'register';
//    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Register::class]);
    }
}
