<?php

class errors extends MVC\System\Core\Controller
{
    public function error404()
    {
        $this->view->render('errors/error404', ['title' => 'Error 404']);
    }
    
    public function error500()
    {
        $this->view->render('errors/error500', ['title' => 'Error 500']);
    }
}
