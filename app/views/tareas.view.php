<?php
    class TareasView{

    function mostrarTarea($tareas){
        require_once 'templates/header.php';
        require_once 'templates/form.php';
        ?>
        <ul class="list-group">
        <?php foreach($tareas as $t){?>
                <li class="list-group-item item-task <?php if ($t->finalizada) echo 'finalizada' ?>">
                    <div>
                        <b><?php echo($t->titulo)?></b> | (Prioridad <?php echo$t->prioridad ?>)
                    </div>
                    <div class="actions">
                        <?php if (!$t->finalizada) { ?><a href="finalizar/<?php echo $t->id?>" type="button" class='btn btn-success'>Finalizar</a> <?php }?>
                        <a href="eliminar/<?php echo $t->id?>" type="button" class='btn btn-danger ml-auto'>borrar</a>
                    </div>
                </li>
                    <?php } ?>
        </ul>
        <?php
            
        require_once 'templates/footer.php';
        }
        public function mostrarError($error){
            require 'templates/header.php';

            echo " <div class='alert alert-danger' role='alert'>
                    $error
                </div> 
            ";
            require 'templates/footer.php';
        }
}