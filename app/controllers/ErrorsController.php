<?php

class Errors extends MVC\System\Core\Controller
{
      public function error404()
      {
            $this->getView()->setTitle("Error 404");
            $this->getView()->render('Error404');
      }

      public function error500()
      {
            $this->getView()->setTitle("Error 500");
            $this->getView()->render('Error500');
      }
}
