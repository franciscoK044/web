<?php

    class productosView{
        
        function mostrarProductos($prod){
            require_once './templates/header.php';
            
            
            ?>
    <ul class="list-group">;
            <?php foreach($prod as $p){?>
                <li class="list-group-item item-task" >
                        <b><?php echo $p->producto ?></b></li>
                <li class="list-group-item item-task" > <?php echo $p->modelo ?></li>
                <li class="list-group-item item-task" > <?php echo $p->precio ?></li>
                <?php
            }?>
            </ul><?php
        }
    }