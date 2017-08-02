<?php

// include the prod configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;
$app['monolog.level'] = 'INFO';


// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'dbname'   => 'scimap',
    'user'     => 'root',
    'password' => '',
);

