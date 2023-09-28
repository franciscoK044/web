<?php
class productosModel{
        private $db;
        
        public function __construct(){
                $this->db = new PDO('mysql:host=localhost;dbname=based_tpe;charset=utf8','root','');
        }
        function getProducts(){
            $query = $this->db->prepare('SELECT * FROM especificaciones');
            $query->execute();
            $info = $query->fetchAll(PDO::FETCH_OBJ);
            return $info;
        }


        function getAllProducts(){
            $query = $this->db->prepare('SELECT * FROM producto');
            $query->execute();
            $producto = $query->fetchAll(PDO::FETCH_OBJ);
            return $producto;   
        }
    }