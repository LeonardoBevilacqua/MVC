<?php

function __autoload($class_name)
{
    $core_path = ROOT.DS.'app'.DS.'core'.DS.strtolower($class_name).'.php';
    
    if(file_exists($core_path))
    {
        require_once ($core_path);
    }
}

