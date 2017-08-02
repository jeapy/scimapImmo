<?php

namespace Scimap\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Scimap\Entity\User;
use Scimap\Form\Type\UserAnonType;

class UserController
{
    public function meAction(Request $request, Application $app)
    {
        $token = $app['security']->getToken();
        $user = $token->getUser();
        $now = new \DateTime();
        $interval = $now->diff($user->getCreatedAt());
        $memberSince = $interval->format('%d days %H hours %I minutes ago');
        $limit = 60;
        $likes = $app['repository.like']->findAllByUser($user->getId(), $limit);
        // Divide artists into groups of 6.
        $groupSize = 6;
        $groupedLikes = array();
        $progress = 0;
        while ($progress < $limit) {
            $groupedLikes[] = array_slice($likes, $progress, $groupSize);
            $progress += $groupSize;
        }

        $data = array(
            'user' => $user,
            'memberSince' => $memberSince,
            'groupedLikes' => $groupedLikes,
        );
        return $app['twig']->render('profile.html.twig', $data);
    }

   
    public function addUserAction(Request $request, Application $app)
    {
        $user = new User();
    $userForm = $app['form.factory']->create(UserAnonType::class, $user);
    $userForm->handleRequest($request);

     if ($userForm->isSubmitted() && $userForm->isValid()) {
                $app['repository.user']->save($user);
                $message = 'L\'utilisateur ' . $user->getUsername() . ' a eté enregistré';
                $app['session']->getFlashBag()->add('user_success', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('inscrire', array('user' => $user->getId()));
                return $app->redirect($redirect);
            }
      

        $data = array(
            'userForm' => $userForm->createView(),
            'title' => 'Add new user',
        );
        return $app['twig']->render('inscription.html.twig', $data);
    }


    public function loginAction(Request $request, Application $app)
    {
            $form = $app['form.factory']->createBuilder(FormType::class)
            ->add('username', TextType::class, array('label' => 'Username', 'data' => $app['session']->get('_security.last_username')))
            ->add('password', PasswordType::class, array('label' => 'Password'))
           
            ->getForm();

        $data = array(
          'form'  => $form->createView(),
            'error' => $app['security.last_error']($request)
            
        );
       
        return $app['twig']->render('login.html.twig', $data);
    }



    public function logoutAction(Request $request, Application $app)
    {
        $app['session']->clear();
        return $app->redirect($app['url_generator']->generate('homepage'));
    }
}
