<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


require_once ('app/php/controller.php');



if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}


$params = explode("/", $action);

switch ($params[0]) {
    case 'home':
        $controller = new mostrarPaginas;
        $controller->home();
        break;
    case 'about':
        $controller = new mostrarPaginas;
        $controller->about();
        break;
    case 'grupos':
        $controller = new mostrarPaginas;
        $controller->grupos();
        break;
    default:
        echo ('No existe la pagina');
        break;
}
?>