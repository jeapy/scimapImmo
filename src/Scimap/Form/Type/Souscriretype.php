<?php

namespace Scimap\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


class SouscrireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Nom'
            ))
            ->add('lastname',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Prenom'
            ))
           

            ->add('job',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Profession'
            ))
            ->add('adress',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Adresse postale'
            ))
             ->add('mail', EmailType::class, array(
                'constraints' => array(new Assert\NotBlank(), new Assert\Email()),
                 'label'=> 'Adresse electronique',
            ))

            ->add('phone',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Numero de telephone'
            ))
            ->add('home',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Lieu de residence'
            ))

            ->add('identity', ChoiceType::class, array(
                'choices' => array('CNI' => 1,
                                  'ATT' => 2,
                                  'PASSPORT' => 3,
                                  'C.C' => 4),
                 'label'=> 'Nature de la piece d\'identité',
                 'expanded'=>'false'
            ))
            ->add('number',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Numero de la piéce'
            ))
           
           ->add('validity',DateType::class,array(
             'label'=> 'Date de validite',
                'widget' => 'single_text',                        
                'html5' => false,
                 'format'=>'dd-MM-yyyy',
                'input' =>'timestamp',
            ))
            
            ->add('born',DateType::class,array(
            'label' => 'Date de naissance',            
                'widget' => 'single_text',                        
                'html5' => false,
                'format'=>'dd-MM-yyyy',
                'input' =>'timestamp',
            ))
             ->add('deliverby',TextType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Delivré par'
            ))
                          ; 
    }

    public function getName()
    {
        return 'souscrire';
    }
}
