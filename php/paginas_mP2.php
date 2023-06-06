<?php
require_once('contenido\mostrarPag2.php');

function inicio($contenido){
    $javascript ='<script></script>';
    $titulo="Inicio";
    $about="about";
    $grupos="grupos";
    $homeUrl="home";
    $homeContenido=$contenido;
    echo(imprimirPagina($homeContenido,$homeUrl,$titulo,$about,$grupos,$javascript));
}
function about($contenido){
    $javascript ='<script></script>';
    $titulo="About";
    $about="about";
    $grupos="grupos";
    $homeUrl="home";
    $aboutContenido=$contenido;
    echo(imprimirPagina($aboutContenido,$homeUrl,$titulo,$about,$grupos,$javascript));
}
function grupos(){
    $javascript ='<script type="text/javascript" src="scipt.js"></script>';
    $titulo="Grupos";
    $about="about";
    $grupos="grupos";
    $homeUrl="home";
    $gruposContenido=
    '<form>
            <label>Integrante 1:</label> <input id="integrante1" type="text" name="integrante 1" value="" placeholder="Integrante 1" />
            <label>Integrante 2:</label> <input id="integrante2" type="text" name="integrante 2" value="" placeholder="Integrante 2" />
            <label>Integrante 3:</label> <input id="integrante3" type="text" name="integrante 3" value="" placeholder="Integrante 3" /><br>
            <label>Integrante 4:</label> <input id="integrante4" type="text" name="integrante 4" value="" placeholder="Integrante 4" />
            <label>Integrante 5:</label> <input id="integrante5" type="text" name="integrante 5" value="" placeholder="Integrante 5" />
        <section>
            <input id="enviarDatos" type="button" value="Enviar datos">
        </section>
        <p id="mensaje"></p>
        <table id="tabla">
        <thead>
            <tr>
                <th>Integrante 1</th>
                <th>Integrante 2</th>
                <th>Integrante 3</th>
                <th>Integrante 4</th>
                <th>Integrante 5</th>
            </tr>
        </thead>
        <tbody id="cuerpoTabla">
        </tbody>
    </table>';
    echo(imprimirPagina($gruposContenido,$homeUrl,$titulo,$about,$grupos,$javascript));

}