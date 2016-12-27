<?php namespace MVC\System\Core;
class Controller
{
    function __construct() {
        $this->view = new View();
    }
    
    protected function redirect($controller, $action, $param = null)
    {
        header('Location: ' . DIRECTORY . $controller . '/' . $action . $param);
    }

    /**
     * Load the object of the model.
     * @param type $model The location of the model file.
     * @return Object Return the object of the model.
     */
    protected function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }
}