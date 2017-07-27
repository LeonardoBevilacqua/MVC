<?php

class Home extends MVC\System\Core\Controller
{
      public function index()
      {
            $this->getView()->setTitle("Index");
            $this->getView()->render('Index');
      }
}
