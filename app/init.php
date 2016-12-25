<?php

$composer_autoload = __DIR__.'/../vendor/autoload.php';

if ( ! file_exists($composer_autoload))
       die('Execute o comando: composer install');

if (version_compare(PHP_VERSION, '5.4.0', '<'))
       die('Atualize seu PHP para a vers&atilde;o: 5.4.0 ou superior.');

require_once $composer_autoload;

