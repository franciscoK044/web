<?php
    require_once './app/models/products.Model.php';
    require_once './app/views/productos.view.php';

    class productosController{
        private $model;
        private $view;

        public function __construct(){
            $this->model = new productosModel();
            $this->view = new productosView();
        }

        function mostrarProd(){
            
            //obtengo productos
            $productos = $this->model->getAllProducts();
            //muestro los productos
            $this->view->mostrarProductos($productos);
        }
    }