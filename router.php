<?php
require_once './app/controllers/tareas.php';
require_once './app/controllers/productos.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
/** 
 * 
*/
//parsea la accion Ej: noticia/1 --> ['noticia',1]
//$params = explode('/', $action);
//var_dump($params);
//die();
$action = 'home';
    if (isset ($_GET['action'])){
        $action = $_GET['action'];
    }
require_once './templates/form.php';
//parsea la accion Ej: noticia/1 --> ['noticia',1]
$params = explode('/', $action);
    switch ($params[0]) {
        case 'productos' :
            $controller = new productosController();
            $controller->mostrarProd();
            break;
        case 'home' :
            $controller = new tareasController();
            $controller->mostrarTarea(); 
            break;
        case 'agregar' :
            $controller = new tareasController();
            $controller->addTarea();
            break;
        case 'eliminar' :
            $controller = new tareasController();
            $controller->removeTarea($params[1]);
            break;
        case 'finalizar' :
            $controller = new tareasController();
            $controller->finalizarTarea($params[1]);
            break;
        default :
            echo ("pagina no se ha detectado");
            break;
    }
