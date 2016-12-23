<?php

class error404 extends Controller
{
    public function index()
    {
        $this->view('error404/index', ['title' => 'Error 404']);
    }
}
