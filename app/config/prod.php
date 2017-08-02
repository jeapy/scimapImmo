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
    'host'     => '144.217.93.153',
    'port'     => '3306',
    'dbname'   => 'scimap',
    'user'     => 'root',
    'password' => '00000000',
);
// SwiftMailer
// See http://silex.sensiolabs.org/doc/providers/swiftmailer.html
/*
$app['swiftmailer.options'] = array(
    'host' => 'smtp.scimapimmmo.com',
    'port' => '587',
    'username' => 'infos@scimapimmmo.com',
    'password' => 'scimap2017',
    'encryption' => null,
    'auth_mode' => null
);
*/
$app['swiftmailer.options'] = array(
 'host' => 'mail.meteaci.com',
    'port' => '587',
    'username' => 'jean.zougou@meteaci.com',
    'password' => 'yesjedois01F',
    'encryption' => null,
    'auth_mode' => null
    );