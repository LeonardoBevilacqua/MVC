<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

// Always provide a TRAILING SLASH (/) AFTER A PATH

/**
 * Url = http:// + your host + /folder
 */
define('URL', 'http://' . $_SERVER['HTTP_HOST'] . '/MVC/');
//define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

require_once 'app/init.php';

use MVC\System\Core\App as App;

$app = new App;

