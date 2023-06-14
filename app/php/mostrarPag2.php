<?php
function imprimirHeader($titulo){
    $header="<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>{$titulo}</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='app/styles/estilos.css' type='text/css'>
        <script type='text/javascript' src='app/js/script.js'></script>
    </head>
    <body>
        <header>
            <a href='home'>Home</a>
            <a href='about'>About</a>
            <a href='grupos'>Grupos</a>
        </header>
        <h1 class='title'>{$titulo}</h1>";
        return($header);
};
function imprimirPie(){
    $footer="
    <p>Todos los derechos reservados</p>
    </body>
    </html>";
    return($footer);
}
function imprimirPagina($pagActual,$titulo){
    $contenido=imprimirHeader($titulo).
    $pagActual.
    imprimirPie();
    return($contenido);
}