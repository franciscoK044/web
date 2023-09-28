<?php

    class tareasModel{
        private $db;

        function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=mi_base;charset=utf8','root','');
            //obtiene toda la lista de tareas de la base de dato;
        }
            function traerLista(){
                $query = $this->db->prepare('SELECT * FROM db_listatarea');
                $query-> execute();
                //tareas es un arreglo de tareas
                $tareas = $query->fetchAll(PDO::FETCH_OBJ);
                return $tareas;
            }
        function aniadirTare($titulo,$descripcion,$prioridad){
            $query = $this->db->prepare('INSERT INTO db_listatarea(titulo, descripcion, prioridad) VALUES(?,?,?)');
            $query-> execute([$titulo, $descripcion, $prioridad]);
            return $this->db->lastInsertId();
        }

        function eliminaTarea($id){
            $query = $this->db->prepare('DELETE FROM db_listatarea WHERE id = ?');
            $query-> execute([$id]);
        }
        
        
        function actualizarTarea($id){
        $query = $this->db->prepare('UPDATE db_listatarea SET finalizada = 1 WHERE id = ?');
        $query->execute([$id]);   
        }




        
    }