<?php

// Register route converters.
// Each converter needs to check if the $id it received is actually a value,
// as a workaround for https://github.com/silexphp/Silex/pull/768.
/*
$app['controllers']->convert('artist', function ($id) use ($app) {
    if ($id) {
        return $app['repository.artist']->find($id);
    }
});
$app['controllers']->convert('comment', function ($id) use ($app) {
    if ($id) {
        return $app['repository.comment']->find($id);
    }
});
$app['controllers']->convert('user', function ($id) use ($app) {
    if ($id) {
        return $app['repository.user']->find($id);
    }
});
*/




// Register routes.
$app->match('/', 'Scimap\Controller\IndexController::indexAction')
    ->bind('homepage');
    
$app->get('/entreprise', 'Scimap\Controller\IndexController::entrepriseAction')
    ->bind('compagny');

$app->get('/produits', 'Scimap\Controller\IndexController::projetAction')
    ->bind('projet');

$app->match('/contact', 'Scimap\Controller\IndexController::contactAction')
    ->bind('contact');



$app->get('/blog', 'Scimap\Controller\IndexController::blogAction')
    ->bind('blog');

$app->match('/souscrire', 'Scimap\Controller\IndexController::souscrireAction')
    ->bind('souscrire');
    
$app->get('/image', 'Scimap\Controller\IndexController::imageAction')
    ->bind('image');


$app->match('/videos', 'Scimap\Controller\IndexController::videoAction')
    ->bind('video');


$app->match('/login', 'Scimap\Controller\UserController::loginAction')
    ->bind('login');

$app->get('/logout', 'Scimap\Controller\UserController::logoutAction')
    ->bind('logout');

$app->match('/inscrire', 'Scimap\Controller\UserController::addUserAction')
    ->bind('inscrire');


$app->match('/form_s', 'Scimap\Controller\IndexController::form_souscrireAction')
    ->bind('formS');
    
$app->match('/form_p', 'Scimap\Controller\IndexController::form_planAction')
    ->bind('formP');


$app->get('/sociale1', 'Scimap\Controller\IndexController::sociale1Action')
    ->bind('sociale1');

$app->get('/sociale2', 'Scimap\Controller\IndexController::sociale2Action')
    ->bind('sociale2');

$app->get('/sociale3', 'Scimap\Controller\IndexController::sociale3Action')
    ->bind('sociale3');


$app->get('/moyen_standing1', 'Scimap\Controller\IndexController::moyenStanding1Action')
    ->bind('moyenstanding1');

$app->get('/moyen_standing2', 'Scimap\Controller\IndexController::moyenStanding2Action')
    ->bind('moyenstanding2');

$app->get('/moyen_standing3', 'Scimap\Controller\IndexController::moyenStanding3Action')
    ->bind('moyenstanding3');



$app->get('/haut_standing1', 'Scimap\Controller\IndexController::hautStanding1Action')
    ->bind('hautstanding1');

$app->get('/haut_standing2', 'Scimap\Controller\IndexController::hautStanding2Action')
    ->bind('hautstanding2');

$app->get('/haut_standing3', 'Scimap\Controller\IndexController::hautStanding3Action')
    ->bind('hautstanding3');








$app->get('/admin', 'Scimap\Controller\AdministrationController::indexAction')
    ->bind('admin');

$app->get('/admin/souscripteur', 'Scimap\Controller\AdministrationController::souscripteurAction')
    ->bind('souscripteur');

$app->get('/admin/souscripteur_show', 'Scimap\Controller\AdministrationController::souscripteurShowAction')
    ->bind('souscripteur_show');

$app->get('/admin/newsletter', 'Scimap\Controller\AdministrationController::newsletterAction')
    ->bind('newsletter');

$app->get('/admin/article', 'Scimap\Controller\AdministrationController::articleAction')
    ->bind('articles');

$app->match('/admin/article/new', 'Scimap\Controller\AdministrationController::addArticleAction')
    ->bind('articles_new');

$app->match('/admin/article/{article}/edit', 'Scimap\Controller\AdministrationController::editArticleAction')
    ->bind('article_edit');

$app->get('/admin/media', 'Scimap\Controller\AdministrationController::mediaAction')
    ->bind('medias');

$app->match('/admin/media/new', 'Scimap\Controller\AdministrationController::addMediaAction')
    ->bind('medias_new');

$app->match('/admin/media/{media}/edit', 'Scimap\Controller\AdministrationController::editMediaAction')
    ->bind('media_edit');

$app->match('/admin/excel', 'Scimap\Controller\AdministrationController::excelAction')
->bind('excel');

$app->get('/admin/users', 'Scimap\Controller\AdminUserController::indexAction')
    ->bind('admin_users');
$app->match('/admin/users/add', 'Scimap\Controller\AdminUserController::addAction')
    ->bind('admin_user_add');
$app->match('/admin/users/{user}/edit', 'Scimap\Controller\AdminUserController::editAction')
    ->bind('admin_user_edit');
$app->match('/admin/users/{user}/delete', 'Scimap\Controller\AdminUserController::deleteAction')
    ->bind('admin_user_delete');

$app->match('/admin/profil', 'Scimap\Controller\AdministrationController::profilAction')
->bind('profil');    

