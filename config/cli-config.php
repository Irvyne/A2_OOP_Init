<?php

require __DIR__.'/../vendor/autoload.php';

use Doctrine\DBAL\Tools\Console\ConsoleRunner;

$config = new \Doctrine\DBAL\Configuration();

$connectionParams = [
    'dbname'    => 'unitato',
    'user'      => 'root',
    'password'  => 'toor',
    'host'      => 'localhost',
    'driver'    => 'pdo_mysql',
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

return ConsoleRunner::createHelperSet($conn);