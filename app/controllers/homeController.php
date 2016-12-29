<?php

class Home extends MVC\System\Core\Controller
{
    public function index($name = null)
    {
        $user = $this->model('Users');
        $user->name = $name;
        //$this->view->setHeader('_custom/header');
        //$this->view->setFooter('_custom/footer');
        $this->view->render('home/index', ['name' => $user->name,'title' => 'Index']);
    }
    
    public function test(){
        $user = $this->model('Users');
        $data = $user->findAll() ? $user->findAll() : $this->redirectTo('Errors/dbError');
        
        $this->view->render('home/test', ['users' => $data,'title' => 'test']);
    }
    
    public function testPost(){
        $name = ['name' => $this->post('name')];        
        $user = $this->model('Users');
        
        $user->newUser($name);
        
        $data = $user->findAll() ? $user->findAll() : $this->redirectTo('Errors/dbError');        
        
        $this->view->render('home/test', ['users' => $data,'user' => $this->post('name'), 'title' => 'test']);
    }
}