<?php

function load_System_Core($className)
{
      $className = str_replace("\\","/",$className);
      if(file_exists($className.".php"))
      {
            include($className . ".php");
      }
      else{
            throw new Exception("Class not found!", 1);
      }
}
spl_autoload_register("load_System_Core");
