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
    
    public function test($id){
        $user = $this->model('Users');
        $data = $user->findById($id) ? $user->findById($id) : $this->redirect('Errors', 'dbError');
        
        $this->view->render('home/test', ['user' => $data,'title' => 'test']);
    }
}