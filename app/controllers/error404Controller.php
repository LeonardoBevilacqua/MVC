<?php

class error404 extends MVC\System\Core\Controller
{
    public function index()
    {
        $this->view->render('error404/index', ['title' => 'Error 404']);
    }
}
