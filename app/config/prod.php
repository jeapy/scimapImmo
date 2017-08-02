<?php

// Timezone.
date_default_timezone_set('Africa/Abidjan');

// Cache
$app['cache.path'] = __DIR__ . '/../cache';
$app['monolog.level'] = 'WARNING';
// Twig cache
$app['twig.options.cache'] = $app['cache.path'] . '/twig';

// Emails.
$app['admin_email'] = 'noreply@musicbox.nothing';
$app['site_email'] = 'noreply@musicbox.nothing';

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'dbname',
    'user'     => 'dbuser',
    'password' => 'dbpassword',
);
// SwiftMailer
// See http://silex.sensiolabs.org/doc/providers/swiftmailer.html

$app['swiftmailer.options'] = array(
    'host' => 'localhost',
    'port' => '25',
    'username' => 'mail username',
    'password' => 'mail password',
    'encryption' => null,
    'auth_mode' => null
);

