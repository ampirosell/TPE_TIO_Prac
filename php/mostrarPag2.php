<?php
function imprimirHeader($titulo , $javascript){
    $header="<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>{$titulo}</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='estilos.css' type='text/css'>
        {$javascript}
    </head>
    <body>
        <h1 class='title'>{$titulo}</h1>";
        return($header);
};
function imprimirPie($home,$about,$grupos){
    $footer="
    <a href='{$home}'>Home</a>
    <a href='{$about}'>About</a>
    <a href='{$grupos}'>Grupos</a>
    </body>
    </html>";
    return($footer);
}
function imprimirPagina($pagActual,$homeUrl,$titulo,$about,$grupos,$javascript){
    $contenido=imprimirHeader($titulo , $javascript).
    $pagActual.
    imprimirPie($homeUrl,$about,$grupos);
    return($contenido);
}