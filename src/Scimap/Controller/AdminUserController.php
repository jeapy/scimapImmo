<?php

namespace Scimap\Controller;

use Scimap\Entity\User;
use Scimap\Form\Type\UserType;
use Silex\Application;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;

class AdminUserController
{
    public function indexAction(Request $request, Application $app)
    {
        // Perform pagination logic.
        $limit = 10;
        $total = $app['repository.user']->getCount();
        $numPages = ceil($total / $limit);
        $currentPage = $request->query->get('page', 1);
        $offset = ($currentPage - 1) * $limit;
        $users = $app['repository.user']->findAll($limit, $offset);

        $data = array(
            'users' => $users,
            'currentPage' => $currentPage,
            'numPages' => $numPages,
            'here' => $app['url_generator']->generate('admin_users'),
        );
        return $app['twig']->render('admin/admin_users.html.twig', $data);
    }

    public function addAction(Request $request, Application $app)
    {
        $user = new User();
        $form = $app['form.factory']->create(UserType::class, $user);

        $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
                $app['repository.user']->save($user);
                $message = 'Utilisateur ' . $user->getUsername() . ' enregistré.';
                $app['session']->getFlashBag()->add('success', $message);
                // Redirect to the edit page.
                $redirect = $app['url_generator']->generate('admin_user_edit', array('user' => $user->getId()));
                return $app->redirect($redirect);
            }
       

        $data = array(
            'form' => $form->createView(),
            'title' => 'Add new user',
        );
        return $app['twig']->render('admin/admin_users_add.html.twig', $data);
    }

    public function editAction(Request $request, Application $app)
    {
        $userA = $request->get('user');
        if (!$userA) {
            $app->abort(404, 'The requested user was not found.');
        }
         $user = $app['repository.user']->find($userA);

        $form = $app['form.factory']->create(UserType::class, $user);

                 $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                $previousPassword = $user->getPassword();
                // If an empty password was entered, restore the previous one.
                $password = $user->getPassword();
                if (!$password) {
                    $user->setPassword($previousPassword);
                }

                $app['repository.user']->save($user);
                $message = 'Utilisateur ' . $user->getUsername() . ' mis à jour.';
                $app['session']->getFlashBag()->add('success', $message);
            }
      

        $data = array(
            'form' => $form->createView(),
            'title' => 'Edit user ' . $user->getUsername(),
        );
        return $app['twig']->render('admin/admin_users_edit.html.twig', $data);
    }

    public function deleteAction(Request $request, Application $app)
    {
        $user = $request->attributes->get('user');
        if (!$user) {
            $app->abort(404, 'The requested user was not found.');
        }

        $app['repository.user']->delete($user->getId());
        return $app->redirect($app['url_generator']->generate('admin_users'));
    }
}
