<?php

namespace Scimap\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class MediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          
            ->add('description', TextareaType::class, array(
                'constraints' => array(new Assert\NotBlank()),
                 'label'=> 'Description du media',
            ))
            ->add('file', FileType::class, array(
                'required' => FALSE,
                'label' => 'Media',
            ))
            ->add('mediatype', ChoiceType::class, array(
                'choices' => array('VIDEO' => '1',
                                  'IMAGE' => '2'),
                 'label'=> 'Type de media',
                 'placeholder'=> 'Faites un choix',
            ))
             ->add('save', SubmitType::class);
    }

    public function getName()
    {
        return 'media';
    }
}
