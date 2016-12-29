            <div class="panel panel-success">
                <div class="panel-body">                    
                    Name from DB:
                    <br>
                    <?php
                    foreach ($data['users'] as $value){
                        echo "Name: {$value['name']} <br>";
                    }
                    ?>
                    <br>
                    <form action="/MVC/home/testPost" method="POST">
                        <input type="text" name="name" />
                        <input type="submit" value="submit" />
                    <?php
                        echo isset($data['user']) ? 'Ultimo criado: '.$data['user'] : '';
                    ?>
                    </form>
                </div>
            </div>
            