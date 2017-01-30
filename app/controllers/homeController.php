<?php

class Home extends MVC\System\Core\Controller
{
    public function index()
    {
        $this->view->render('home/index', ['name' => $user->name,'title' => 'Index']);
    }
}