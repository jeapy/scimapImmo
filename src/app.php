<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app['repository.user'] = function ($app) {
    return new Scimap\Repository\UserRepository($app['db'], $app['security.encoder.bcrypt']);
};

$app['repository.souscrire'] = function ($app) {
    return new Scimap\Repository\SouscrireRepository($app['db']);
};

$app['repository.newsletter'] = function ($app) {
    return new Scimap\Repository\NewsletterRepository($app['db']);
};

$app['repository.media'] = function ($app) {
    return new Scimap\Repository\MediaRepository($app['db']);
};

$app['repository.article'] = function ($app) {
    return new Scimap\Repository\ArticleRepository($app['db']);
};


$app['repository.plan'] = function ($app) {
    return new Scimap\Repository\PlanRepository($app['db'],$app['repository.souscrire']);
};



$app->register(new Silex\Provider\ValidatorServiceProvider());
// Register service providers.


$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new Silex\Provider\SwiftmailerServiceProvider());
// Register service providers
// ...
// Register the SimpleUser service provider.


$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../logs/scimap_'.Date('Ymd').'.log',
    'monolog.name' => 'Scimap',
    'monolog.level' => $app['monolog.level']
));



$app->register(new Silex\Provider\SecurityServiceProvider(), array(

    'security.firewalls' => array(
        'secured' => array(
            'pattern' => '^/',
            'anonymous' => true,
            'logout' => true,
            'form' => array(
                'login_path' => '/login', 
                'check_path' => '/login_check',
                'username_parameter' => 'form[username]',
                'password_parameter' => 'form[password]',),
            'users' => function ($app) {
                return new Scimap\Repository\UserRepository($app['db'],$app['security.encoder.bcrypt']);
            },
        ),
    ),
    'security.role_hierarchy' => array(
        'ROLE_ADMIN' => array('ROLE_USER'),
    ),
    'security.access_rules' => array(
        array('^/admin', 'ROLE_ADMIN'),
       
    ),
));


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.options' => array(
        'cache' => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true,
    ),
    'twig.form.templates' => array('form_div_layout.html.twig', 'common/form_div_layout.html.twig'),
    'twig.path' => array(__DIR__ . '/../app/views')
));

// Register error handler

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    switch ($code) {
        case 403:
            $entete = 'Acess interdit !';
            $message = 'Vous n\'est pas authorisé à acceder à cette partie du site.Pour plus d\'information veillez contacter l\'admisitrateur';
            break;
        case 404:
            $entete = 'Page inexistante !';
            $message = 'L\'URL demandée n\'a pas été trouvée sur ce serveur. Assurez-vous que l\'adresse du site Web affichée dans la barre d\'adresse de votre navigateur est écrite et formatée correctement ou retournez à la page d\'accueil.';
            break;
        case 500:
            $entete = 'Erreur du code source !';
            $message = 'Verifier votre code source il content probablement une erreur';
            break;
        default:
            $entete = 'Page d\'erreur !';
            $message = 'Une erreur s\'est produite lors de l\'ouverture de la page veillez contacter l\'administrateur du site.';
    }

    return $app['twig']->render('common/error.html.twig', array('message' => $message,
                                                                'code'=> $code,
                                                                'entete'=> $entete));

});


return $app;
