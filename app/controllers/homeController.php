<?php

class Home extends MVC\System\Core\Controller
{
    public function index()
    {
        $this->view->render('home/index', ['title' => 'Index']);
    }
}