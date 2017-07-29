<?php namespace MVC\System\Core;
class Routes {
      private $controller = 'Home';
      private $method = 'index';
      private $params = [];
      private $url = [];

      function __construct()
      {
            $this->loadPage();
      }

      private function loadPage()
      {
            $this->_parseUrl();
            if(!$this->_loadController() || !$this->_loadAction())
            {
                  $this->_loadError404();
            }
      }

      private function _parseUrl()
      {
            if(isset($_SERVER['REQUEST_URI']))
            {
                  $path = rtrim(trim($_SERVER['REQUEST_URI'],'/'), '/');
                  $this->url = explode('/', filter_var($path, FILTER_SANITIZE_URL));

                  if ($this->url[0] == trim(DIRECTORY,'/')) {
                        array_shift($this->url);
                  }
                  return;
            }
            $this->url = null;
      }

      private function _loadController()
      {
            if(isset($this->url[0])){

                  if(file_exists('app/controllers/' . ucfirst($this->url[0]) . 'Controller.php'))
                  {
                        $this->controller = $this->url[0];
                        unset($this->url[0]);
                  }
                  else
                  {
                        return false;
                  }
            }
            require_once 'app/controllers/' . ucfirst($this->controller) . 'Controller.php';
            $this->controller = new $this->controller;
            return true;
      }

      private function _loadAction()
      {
            if(isset($this->url[1]))
            {
                  if(method_exists($this->controller, $this->url[1]))
                  {
                        $this->method = $this->url[1];
                        unset($this->url[1]);
                  }
                  else
                  {
                        return false;
                  }
            }

            $this->params = $this->url ? array_values($this->url) : [];
            $this->_loadPost();
            #var_dump($this->params);die();
            call_user_func_array([$this->controller, $this->method], $this->params);
            return true;
      }

      private function _loadError404(){
            $this->url = null;
            unset($this->controller);
            $this->controller = "Errors";
            $this->method = 'error404';
            $this->_loadController();
            $this->_loadAction();
      }

      private function _loadPost()
      {
            $post = $this->controller->post() ? [$this->controller->post()] : null;
            if ($post != null) {
                  if (sizeof($this->params) > 0) {
                        array_push($this->params, $post);
                  }else {
                        $this->params = $post;
                        #var_dump($post);die();
                  }
            }
      }
}
