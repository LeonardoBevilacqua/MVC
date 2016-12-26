            <div class="panel panel-success">
                <div class="panel-body">
                    <pre>
                        Name from DB:
                        <?php
                            echo isset($data['user']->name) ? $data['user']->name : '';
                        ?>
                    </pre>
                </div>
            </div>
            