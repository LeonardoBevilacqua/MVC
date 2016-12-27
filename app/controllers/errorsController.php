<?php

class errors extends MVC\System\Core\Controller
{
    public function error404()
    {
        $this->view->render('errors/error404', ['title' => 'Error 404']);
    }
    
    public function dbError()
    {
        $this->view->render('errors/dbError', ['title' => 'Error in Database']);
    }
}
