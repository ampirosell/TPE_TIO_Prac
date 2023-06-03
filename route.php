<?php


define("BASE_URL", 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']));


if (!empty($_REQUEST['action'])){
    $accion = $_REQUEST['action'];
} else{$accion = 'home';}
    

$params = explode("/", $accion);

    switch ($params[0]) {
        case 'home':
    
            break;
        case 'pagina2':
           
          
            break;
       
        case 'pagina3':
           
            
            break;
        case 'pagina4':
            
            break;

        default:
            echo "No existe la pagina";
        
    }
?>