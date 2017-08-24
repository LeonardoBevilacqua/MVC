<?php

require_once 'MVC/System/init.php';

//                   root,   css path,       script path,     img path
Init::setDirectories("/MVC/","public/css/", "public/scripts/", "public/imgs/");
//                    type      host         dbName    user      password
Init::setDatabaseInfo("mysql", "localhost", "mvcTest", "root", "Leozinho580");

use MVC\System\Core\App as App;

$app = new App;
