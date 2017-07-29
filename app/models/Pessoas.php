<?php

/**
*
*/
class Pessoas
{
      private $nome;
      private $endereco;
      private $PessoasDados = [];

      public function getPessoas(){
            $con = new PDO("mysql:host=localhost;dbname=mvcTest", "root", "Leozinho580");
            $stmt = $con->query("SELECT * FROM Pessoas");
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                  array_push($this->PessoasDados,
                  ['id' => $row->id,
                  'nome' => $row->nome,
                  'endereco' => $row->endereco
                  ]);
            }
            return $this->PessoasDados;
      }

      public function getPessoasById($id){
            foreach ($this->PessoasDados as $key => $value) {
                  if ($value['id'] == $id) {
                        return $this->PessoasDados[$key];
                  }
            }
      }

      public function addPessoa($pessoa)
      {
            try {
                  $con = new PDO("mysql:host=localhost;dbname=mvcTest", "root", "Leozinho580");
                  $stmt = $con->prepare("INSERT INTO Pessoas VALUES(?,?,?)");
                  $stmt->bindParam(1,$pessoa["id"]);
                  $stmt->bindParam(2,$pessoa["nome"]);
                  $stmt->bindParam(3,$pessoa["endereco"]);
                  if($stmt->execute()){
                        #die("true");
                  }else {
                        die("false");
                  }

            } catch (Exception $e) {
                  die("Error");
            }

      }

      public function deletePessoa($id)
      {
            try {
                  $con = new PDO("mysql:host=localhost;dbname=mvcTest", "root", "Leozinho580");
                  $stmt = $con->prepare("DELETE FROM Pessoas WHERE id = ?");
                  $stmt->bindParam(1,$id);
                  $stmt->execute();
            } catch (Exception $e) {
                  die("Error");
            }

      }
}


?>
