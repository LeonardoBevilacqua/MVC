<table>
      <thead>
            <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Opções</th>
            </tr>
      </thead>
      <tbody>
            <?php
            foreach ($this->data as $key => $value) {
                  echo "<tr>";
                  echo "<td>" . $value["id"] . "</td>";
                  echo "<td>" . $value["nome"] . "</td>";
                  echo "<td>" . $value["endereco"] . "</td>";
                  echo "<td>"."</td>";
                  echo "</tr>";
            }
            ?>
      </tbody>

</table>
<hr>
<form class="" action="<?=DIRECTORY?>test/EnviarPessoa" method="post">
      <label for="id"></label>Id<input type="number" name="id" id="id" value=""> <br>
      <label for="nome"></label>Nome<input type="text" name="nome" id="nome" value=""> <br>
      <label for="endereco"></label>Endereço<input type="text" name="endereco" id="endereco" value="">
      <input type="submit" name="enviar" value="enviar">
</form>
