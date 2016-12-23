<?php

class Controller
{
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
    /**
     * Load the view.
     * @param type String The location of the view;
     * @param type Array (Optional) The data to use in the view.
     */
    public function view($view, $data = [])
    {
        if(file_exists('app/views/header.php'))
        {
            require_once 'app/views/header.php';
        }
        
        require_once 'app/views/' . $view . '.php';
        
        if(file_exists('app/views/footer.php'))
        {
            require_once 'app/views/footer.php';
        }
    }
    
}