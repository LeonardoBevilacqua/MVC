<?php
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

// System info
define('VERSION', '1.0.1');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

 class Init
 {
       public static function setDirectories($rootDirectory, $cssDirectory, $scriptsDirectory, $imgsDirectory)
       {
             define('DIRECTORY', '/' . $rootDirectory);
             define('URL', 'http://' . $_SERVER['HTTP_HOST'] . DIRECTORY);
             define('CSS_PATH', DIRECTORY . $cssDirectory);
             define('SCRIPTS_PATH', DIRECTORY . $scriptsDirectory);
             define('IMGS_PATH', DIRECTORY . $imgsDirectory);
       }

       public static function setDatabaseInfo($dbType, $dbHost, $dbName, $dbUser, $dbPass)
       {
             /*define('DB_TYPE', 'mysql');
             define('DB_HOST', 'localhost');
             define('DB_NAME', 'mvc');
             define('DB_USERNAME', 'root');
             define('DB_PASSWORD', 'Leozinho580');*/
             define('DB_TYPE', $dbType);
             define('DB_HOST', $dbHost);
             define('DB_NAME', $dbName);
             define('DB_USER', $dbUser);
             define('DB_PASS', $dbPass);
       }
}
