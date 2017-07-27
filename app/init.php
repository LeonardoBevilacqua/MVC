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
