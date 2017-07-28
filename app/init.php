<?php

define('VERSION', '1.0.0');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('DIRECTORY', '/MVC/');
define('CSS_PATH', DIRECTORY . 'public/css/');
define('SCRIPTS_PATH', DIRECTORY . 'public/scripts/');
define('IMGS_PATH', DIRECTORY . 'public/imgs/');

// Always provide a TRAILING SLASH (/) AFTER A PATH

/**
 * Url = http:// + your host + /folder
 */
define('URL', 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY);

// mover
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Leozinho580');


function loadSystemClasses($classPath)
{
      $classPath = str_replace("\\","/",$classPath);
      if(file_exists($classPath.".php"))
      {
            include($classPath . ".php");
      }
      else{
            trigger_error("Class not found!: " . $classPath, E_USER_ERROR);
      }
}
spl_autoload_register("loadSystemClasses");
