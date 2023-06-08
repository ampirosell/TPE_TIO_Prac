<?php

define("BASE_URL", 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));


require_once 'php/mostrarPag2.php';
require_once 'php/paginas_mP2.php';



if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else{$action = 'home';}
    

$params = explode("/", $action);

    switch ($params[0]) {
        case 'home':
          inicio($params[0]);
        break;
        case 'about':
            echo ("about");
        break;
        case 'grupo':
            grupos();
        break;
        default:
            echo('No existe la pagina');
        break;

        
    }
?>