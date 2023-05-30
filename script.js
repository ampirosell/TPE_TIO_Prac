document.addEventListener("DOMContentLoaded",
    iniciarPagina);

function iniciarPagina() {
    console.log("entre");
    const url = 'https://636c42afad62451f9fc6929c.mockapi.io/api/usuarios'
    let grupos = [];


        let botonEnviar = document.querySelector("#enviarDatos");
        botonEnviar.addEventListener("click", agregar);
        cargarApi();
        console.log(grupos);


    function reiniciarTabla() {
        cuerpoTabla.innerHTML = "";
    }







}