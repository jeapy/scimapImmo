<?php

namespace Scimap\Controller;

use Silex\Application;
use Scimap\Form\Type\SouscrireType;
use Scimap\Form\Type\PlanType;
use Scimap\Form\Type\NewsletterType;


use Scimap\Entity\Souscrire;
use Scimap\Entity\Plan;
use Scimap\Entity\Newsletter;



use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class IndexController
{

     

    public function indexAction(Request $request, Application $app)
    {    
        $new = new Newsletter();
        $form = $app['form.factory']->createBuilder(FormType::class,$new)       
        ->add('mail',  EmailType::class)        
        ->getForm();

        $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
                $app['repository.newsletter']->save($new);
                $message = 'Votre souscription a été enregistré.';
                $app['session']->getFlashBag()->add('success', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('homepage');
                return $app->redirect($redirect);
            }

            $data = array(
            'form' => $form->createView(),
            
        );
        return $app['twig']->render('index.html.twig', $data);
    }

    public function entrepriseAction(Request $request, Application $app)
    {
       
        return $app['twig']->render('entreprise.html.twig');
    }

    public function projetAction(Request $request, Application $app)
    {
       
        return $app['twig']->render('projets.html.twig');
    }



     public function contactAction(Request $request, Application $app)
    {
       $form = $app['form.factory']->createBuilder(FormType::class)
        ->add('name', TextType::class)
        ->add('mail',  TextType::class)
        ->add('title',  TextType::class)
        ->add('message', TextareaType::class)
        ->getForm();


    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

            $data       =   $form->getData();
            $messagebody = $data['message'];
            $name        = $data['name'];
            $mail        = $data['mail'];
            $subject     = $data['title'];

            $app['mailer']->send(\Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($mail) // replace with your own
                ->setTo(array('jean.zougou@ipwav.com'))   // replace with email recipient
                ->setBody($app['twig']->render('common/email.html.twig',   // email template
                    array('name'      => $name,
                          'message'   => $messagebody,
                    )),'text/html'));
      
        return $app['twig']->render('contact.html.twig', array(
            'message' => 'Message Envoyé avec succès',
            'forms' => $form->createView()
        ));
    }
    return $app['twig']->render('contact.html.twig', array(
            'message' => '',
            'forms' => $form->createView()
        )
    );
        
    }

    
     public function blogAction(Request $request, Application $app)
    {
       // Perform pagination logic.
        $limit = 6;
        $total = $app['repository.article']->getCount();
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;

        $articles = $app['repository.article']->findAll($limit, $offset);
        // Divide artists into groups of 4.
        

        $data = array(
            'articles' =>  $articles ,
            
        );
        return $app['twig']->render('blog.html.twig',$data);
    }



    public function souscrireAction(Application $app)
    {
    $subscriber = new Souscrire();   
    $subscriberForm = $app['form.factory']->create(SouscrireType::class, $subscriber);    
    
     $data = array(
            'subscriberForm' => $subscriberForm->createView(),            
        );  
       
        return $app['twig']->render('form_souscrire.html.twig',$data);
    }

     public function form_souscrireAction(Request $request, Application $app)
    {
    $subscriber = new Souscrire();   
    $subscriberForm = $app['form.factory']->create(SouscrireType::class, $subscriber);    
    $subscriberForm->handleRequest($request);   
  

    if ($subscriberForm->isSubmitted() && $subscriberForm->isValid()) {
        
         $app['repository.souscrire']->save($subscriber);               
        // $subscriberId = $subscriber->getId();     
        $app['session']->getFlashBag()->add('success', 'The user was successfully created.');


         $redirect = $app['url_generator']->generate('formP', array('souscrire_id' => $subscriber->getId()));
                return $app->redirect($redirect);
    }
     $data = array(
            'subscriberForm' => $subscriberForm->createView()           
        );
      
        return $app['twig']->render('form_souscrire.html.twig',$data);
    }



    public function form_planAction(Request $request, Application $app)
    {

    $sous = new Souscrire();

    $sousss = $request->get('souscrire_id');
    $test =   $sous->setId($sousss);

    if (!$sous) {
            $app->abort(404, 'The subscriber was not found.');
        }

    $plan = new Plan();   
    $subscriberForm = $app['form.factory']->create(PlanType::class, $plan);    
    $subscriberForm->handleRequest($request);   
  

    if ($subscriberForm->isSubmitted() && $subscriberForm->isValid() ) {
        
         $plan->setSouscrire( $test);
         var_dump($plan);
        $app['repository.plan']->save( $plan);               
           
        $app['session']->getFlashBag()->add('success', 'The user was successfully created.');

        $redirect = $app['url_generator']->generate('souscrire');
        return $app->redirect($redirect);

                        }

     $data = array('subscriberForm' => $subscriberForm->createView(),
                    'sos' => $sousss);
   
       
        return $app['twig']->render('form_plan.html.twig',$data);
    }




    public function imageAction(Request $request, Application $app)
    {
       
        return $app['twig']->render('image.html.twig');
    }

    public function videoAction(Request $request, Application $app)
    {
       
        return $app['twig']->render('video.html.twig');
    }




     public function sociale1Action(Request $request, Application $app)
    {
       
        return $app['twig']->render('sociale1.html.twig');
    }

    public function sociale2Action(Request $request, Application $app)
    {
       
        return $app['twig']->render('sociale2.html.twig');
    }

    public function sociale3Action(Request $request, Application $app)
    {
       
        return $app['twig']->render('sociale3.html.twig');
    }



    public function moyenStanding1Action(Request $request, Application $app)
    {       
        return $app['twig']->render('moyen_standing1.html.twig');
    }

    public function moyenStanding2Action(Request $request, Application $app)
    {       
        return $app['twig']->render('moyen_standing2.html.twig');
    }

    public function moyenStanding3Action(Request $request, Application $app)
    {       
        return $app['twig']->render('moyen_standing3.html.twig');
    }



    public function hautStanding1Action(Request $request, Application $app)
    {       
        return $app['twig']->render('haut_standing1.html.twig');
    }

    public function hautStanding2Action(Request $request, Application $app)
    {       
        return $app['twig']->render('haut_standing2.html.twig');
    }
    public function hautStanding3Action(Request $request, Application $app)
    {       
        return $app['twig']->render('haut_standing3.html.twig');
    }


}
