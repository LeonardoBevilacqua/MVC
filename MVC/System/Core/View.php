<?php namespace MVC\System\Core;
class View {
      private $title = "";
      private $data = [];
      private $header = 'Header';
      private $footer = 'Footer';
      private $controller;

      function __construct($controller)
      {
            $this->controller = ucfirst(get_class($controller));
      }

      /**
      * Load the view.
      * @param type String The location of the view;
      * @param type Array (Optional) The data to use in the view.
      * @param type Bool (Optional) Set include of layout.
      */
      public function render($view, $renderLayout = true)
      {
            if(file_exists('app/views/' . $this->controller . '/' . $view . '.php'))
            {
                  if(!$renderLayout)
                  {
                        require_once 'app/views/' . $this->controller . '/' . $view . '.php';
                  }
                  else
                  {
                        $this->_renderHeader();
                        require_once 'app/views/' . $this->controller . '/' . $view . '.php';
                        $this->_renderFooter();
                  }
            }
            else
            {
                  trigger_error($this->controller . '/' . $view . " not found!", E_USER_ERROR);
            }
      }

      private function _renderHeader()
      {
            if(file_exists('app/views/_Layout/' . $this->header . '.php'))
            {
                  require_once 'app/views/_Layout/' . $this->header . '.php';
            }
            else
            {
                  trigger_error("$this->header not found!", E_USER_ERROR);
            }
      }

      private function _renderFooter()
      {
            if(file_exists('app/views/_Layout/' . $this->footer . '.php'))
            {
                  require_once 'app/views/_Layout/' . $this->footer . '.php';
            }
            else
            {
                  trigger_error("$this->footer not found!", E_USER_ERROR);
            }
      }

      // GETTERS AND SETTERS
      public function setTitle($title)
      {
            if (is_string($title))
            {
                  $this->title = $title;
            }else
            {
                  trigger_error('The $title must be a string!', E_USER_ERROR);
            }
      }

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

      public function getTitle()
      {
            return $this->title;
      }
}
