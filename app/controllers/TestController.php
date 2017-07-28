<?php

class Test extends MVC\System\Core\Controller
{
      public function index()
      {
            $pessoas = $this->model("Pessoas");

            $this->getView()->setData($pessoas->getPessoas());

            $this->getView()->setTitle("Test Form");
            $this->getView()->render('Index');
      }

      public function EnviarPessoa($pessoa)
      {            
            $pessoas = $this->model("Pessoas");
            $pessoas->addPessoa($pessoa);

            $this->redirectTo("Test/index");
      }
}
