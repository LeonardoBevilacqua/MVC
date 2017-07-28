<?php namespace MVC\System\Core;
use MVC\System\Http as Http;

class Controller
{
      /**
      * Injeção do Http Response
      * @var object
      */
      private $response;

      /**
      * Injeção do Http Request
      * @var object
      */
      private $request;
      private $view;

      function __construct() {
            $this->view = new View($this);
            $this->response = new Http\Response;
            $this->request = new Http\Request;
      }

      protected function redirectTo($url)
      {
            return $this->response->redirectTo($url);
      }

      public function post($name = null)
      {
            return $this->request->post($name);
      }

      protected function get($name = null)
      {
            return $this->request->get($name);
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

      public function getView()
      {
            return $this->view;
      }
}
