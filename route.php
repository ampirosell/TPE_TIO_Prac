<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once('contenido\mostrarPag2.php');
require_once('contenido\paginas_mP2.php');
require_once('contenido\libs\Smarty.class.php');
//require once los archivos de los chicos con variables globales que contengan el contenido


if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


switch ($action) {
    case 'home':
        $contenidoInicio="<h3>Aca ya no se como anexar</h3>";//o hacemos una variable en otro archivo 
        inicio($contenidoInicio);//esta bien pasar el contenido asi? o lo seteamos en paginas_mP2
        break;    
    case 'about':
        $contenidoAbout="<h3>Somos un muy buen grupo</h3>";
        about($contenidoAbout);
        break;
    case 'grupos':
        grupos();
        break;    
    default: {
            $parametros = explode('/', $action);
            # code...
        }
        break;
}
