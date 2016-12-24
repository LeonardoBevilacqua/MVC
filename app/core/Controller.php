<?php

class Controller
{
    protected $header = '_layout/header';
    protected $footer = '_layout/footer';

    function setHeader($header) 
    {
        $this->header = $header;
    }

    function setFooter($footer) 
    {
        $this->footer = $footer;
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
    /**
     * Load the view.
     * @param type String The location of the view;
     * @param type Array (Optional) The data to use in the view.
     * @param type Bool (Optional) Set include of layout.
     */
    public function view($view, $data = [], $noInclude = false)
    {
        if($noInclude)
        {
            require_once 'app/views/' . $view . '.php';
        }
        else
        {
            $this->_renderHeader($this->header, $data);

            require_once 'app/views/' . $view . '.php';

            $this->_renderFooter($this->footer, $data);
        }
    }
        
    private function _renderHeader($header, $data = [])
    {
        if(file_exists('app/views/' . $header . '.php'))
            {
                require_once 'app/views/' . $header . '.php';
            }
    }
    
    private function _renderFooter($footer, $data = [])
    {
        if(file_exists('app/views/' . $footer . '.php'))
            {
                require_once 'app/views/' . $footer . '.php';
            }
    }
}