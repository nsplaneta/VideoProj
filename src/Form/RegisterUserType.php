<?php

namespace App\Form;

use App\Entity\Users;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use \Symfony\Component\Form\Extension\Core\Type\TextType;


class RegisterUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $options['user'];

        $builder
            ->add('email', EmailType::class)
            ->add('name', TextType::class)
            ->add('last_name', TextType::class)
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => array('label'=>'Password'),
                'second_options' => array('label'=>'Repeat Password'),

            ])
            ->add('save', SubmitType::class, ['label'=>'Register'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
            'user' => null
        ]);
    }
}
