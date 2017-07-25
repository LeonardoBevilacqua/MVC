<?php

class Errors extends MVC\System\Core\Controller
{
    public function error404()
    {
        $this->view->render('errors/Error404', ['title' => 'Error 404']);
    }

    public function error500()
    {
        $this->view->render('errors/Error500', ['title' => 'Error 500']);
    }
}
