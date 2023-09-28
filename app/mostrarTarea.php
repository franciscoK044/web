<?php
require_once './app/db.php';



    function mostrarTarea(){
        require_once 'templates/header.php';
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
            echo ("las tareas estan acá");
        require_once 'templates/footer.php';
    }



    function ver(){

    require_once 'templates/header.php';
        $productos = getAllProducts();
        $transactions = obtenertransactions();


        $monto = 0;
        $veces = 0;
        $materialrequerido = "plastico";
        
        echo "<ul>";

        foreach($productos as $pp){
            foreach($transactions as $t){
            if ($pp->material == $materialrequerido){
                $monto = $monto +$t->price;
                $veces++;
         //   echo '<li>' . $pp->producto . ', ' . $pp->material . ', ' . $pp->medio .  '</li>';
            }
        }   
    }
        echo "<h3> el promedio es : $monto/$veces ";
        echo("--------------------");
        
      //  foreach($transactions as $t){
        //    echo '<li>' . $t->channel . ', ' . $t->product . ', ' . $t->price .  '</li>';
      //  }
        echo "</ul>";
    }