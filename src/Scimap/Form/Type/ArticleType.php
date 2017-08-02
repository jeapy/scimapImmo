<?php

namespace Scimap\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Titre'
            ))
            
            ->add('description', TextareaType::class, array(
                'constraints' => array(new Assert\NotBlank()),
                 'label'=> 'Description',
            ))
            ->add('file', FileType::class, array(
                'required' => FALSE,
                'label' => 'Image',
            ))
            ->add('save', SubmitType::class)
            ;
    }

    public function getName()
    {
        return 'article';
    }
}
