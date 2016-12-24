<?php
class Routes {
    
    protected $controller = 'home';
    
    protected $method = 'index';
    
    protected  $params = [];
    
    function __construct() {
        $url = $this->parseUrl();
        
        if(isset($url[0])){
            if(file_exists('app/controllers/' . $url[0] . 'Controller.php'))
            {
                $this->controller = $url[0];
                unset($url[0]);
            } 
            else 
            {
                $this->controller = 'error404';
                unset($url[0]);
            }
        }
        
        $this->_loadController($this->controller);
        
        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
            else 
           {
                $this->_loadController('error404');
           }
        }
        
        $this->_loadAction($url);
    }
    
    private function parseUrl()
    {
        if(isset($_SERVER['REQUEST_URI']))
        {
            $path = rtrim(trim($_SERVER['REQUEST_URI'],'/'), '/');
            $url = explode('/', filter_var($path, FILTER_SANITIZE_URL));
            array_shift($url);
            return $url;
        }
    }
    
    private function _loadController($controller)
    {
        $this->controller = $controller;
        require_once 'app/controllers/' . $this->controller . 'Controller.php';
        $this->controller = new $this->controller;
    }
    
    private function _loadAction($url)
    {
        $this->params = $url ? array_values($url) : [];
        
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
