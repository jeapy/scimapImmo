<?php

namespace Scimap\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class UserAnonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Nom utilisateur'
            ))
            ->add('password', RepeatedType::class, array(
                'type'            => PasswordType::class,
                'invalid_message' => 'Mots de passe non identique',
                'options'         => array('required' => false),
                'first_options'   => array('label' => 'Mot de passe'),
                'second_options'  => array('label' => 'Repetez Mot de passe'),
                'required' => TRUE,
            ))
            ->add('mail', EmailType::class, array(
                'constraints' => array(new Assert\NotBlank(), new Assert\Email()),
                 'label'=> 'Adresse mail',
            ))
            ->add('file', FileType::class, array(
                'required' => FALSE,
                'label' => 'Image',
            ))
           ;
    }

    public function getName()
    {
        return 'useranon';
    }
}
