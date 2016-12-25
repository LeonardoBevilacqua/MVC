<?php

class Home extends Controller
{
    public function index($name = null)
    {
        $user = $this->model('Users');
        $user->name = $name;
        //$this->view->setHeader('_custom/header');
        //$this->view->setFooter('_custom/footer');
        $this->view->render('home/index', ['name' => $user->name,'title' => 'Index']);
    }
}