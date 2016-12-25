<?php namespace MVC\System\Core;
class View {
    protected $header = '_layout/header';
    protected $footer = '_layout/footer';

    /**
     * Set the location of the header.
     * @param $header type string The location of the header.
     */
    function setHeader($header) 
    {
        $this->header = $header;
    }
    
    /**
     * Set the location of the footer.
     * @param $footer type string The location of the footer.
     */
    function setFooter($footer) 
    {
        $this->footer = $footer;
    }

    /**
     * Load the view.
     * @param type String The location of the view;
     * @param type Array (Optional) The data to use in the view.
     * @param type Bool (Optional) Set include of layout.
     */
    public function render($view, $data = [], $noInclude = false)
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
