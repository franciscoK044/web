<?php
    require_once './app/models/tareas.Model.php';
    require_once './app/views/tareas.view.php';
    class tareasController{
        private $model;
        private $view;

        public function __construct(){
            $this->model = new tareasModel();
            $this->view = new tareasView();
        }
        
        public function mostrarTarea(){
            //obtengo tareas del controlador
            $tareas = $this->model->traerLista();

            //muestro las tareas desde la vista
            $this->view->mostrarTarea($tareas);
        }

        
        public function addTarea(){

            //obtengo los datos del usuario

            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $prioridad = $_POST['prioridad'];

            if (empty($titulo) || empty($prioridad)){
                $this->view->mostrarError("Debe completar todos los campos");
                return;
            }

            $id = $this->model->aniadirTare($titulo,$descripcion,$prioridad);
            if ($id){
                header("Location:" . BASE_URL . "home");
            }
            else{
                $this->view->mostrarError("Error al insertar la tarea");
            }
        }  
    
        function removeTarea($id){
            $this->model->eliminaTarea($id);
            header("Location:" . BASE_URL . "home");
        }

        function finalizarTarea($id){
            $this->model->actualizarTarea($id);
            header("Location:" . BASE_URL . "home");
        }
}