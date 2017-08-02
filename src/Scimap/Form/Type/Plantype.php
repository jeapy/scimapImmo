<?php

namespace Scimap\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;



class PlanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder



              ->add('plan', ChoiceType::class, array(
                'choices' => array('Plan Personnel' => 1,
                                  'Plan Scimap' => 2
                                 ),
                 'label'=> 'Plan de Construction',
                 'expanded'=>'false'
            )) 
              ->add('housetype', ChoiceType::class, array(
                'choices' => array(
                            'Sociale' => array(
                                '3 pièces(9 000 000 FCFA)' => '1',
                                '4 pièces(11 000 000 FCFA)' => '2',
                                '5 pièces(13 000 000 FCFA)'=> '3',
                            ),
                            'Moyen Standing' => array(
                                '3 pièces(21 000 000 FCFA)' => '4',
                                '4 pièces(24 000 000 FCFA)' => '5',
                                '5 pièces(29 000 000 FCFA)'=> '6',
                            ),
                             'Haut Standing' => array(
                                 '3 pièces(40 000 000 FCFA)' => '7',
                                '4 pièces(45 000 000 FCFA)' => '8',
                                '5 pièces(50 000 000 FCFA)'=> '9',
                            ),
                        ),
                 'label'=> 'Type de maison',
                 'required' => false
                 
            ))
    
            ->add('worktype', ChoiceType::class, array(
                'choices' => array('Construction' => 1,
                                  'Travaux de réhabilitation ' => 2,
                                  'Travaux d’achèvement  ' => 3
                                 ),
                 'label'=> 'Type de travaux',
                 'required' => false
                 
            ))

            ->add('startmoney',NumberType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Apport initial (40%) '
            ))

            ->add('solde',NumberType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'solde à payer '
            ))

            ->add('contractyear',IntegerType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'En années'
            ))
            ->add('contractmonth',IntegerType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'En mois'
            ))
            ->add('monthly',NumberType::class, array(
                'constraints' => new Assert\NotBlank(),
                'label'=> 'Mensualité'
            ))

            ->add('local',TextType::class,array(
             'label'=> 'Situation geographique',
                 'required' => false
            ))

        ->add('area',IntegerType::class,array(
            'label' => 'Superficie',
                 'required' => false
            ))

        ->add('document',ChoiceType::class, array(
                'choices' => array('PC' => 1,
                                  'ACD' => 2,
                                  'AV' => 3),
                 'label'=> 'Document administratif',
                 'expanded'=>'true',
                 'multiple'=> 'true',
                 'required' => false
            ))

        ->add('buildnumber',TextType::class,array(
            'label' => 'Permis de construire N°',
                 'required' => false
            ));

}
             public function getName()
    {
        return 'planscimap';
    }

}
