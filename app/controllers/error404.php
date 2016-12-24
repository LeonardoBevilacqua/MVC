<?php

class error404 extends Controller
{
    public function index()
    {
        $this->view->render('error404/index', ['title' => 'Error 404']);
    }
}
