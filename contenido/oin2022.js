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

    async function cargarApi() {
        try {
            let res = await fetch(url)
            let json = await res.json();
            console.log(json);
            grupos= json;
            console.log(grupos);
            actualizarTabla(grupos);
        }
        catch (error) {
            console.log(error);
        }
    }


    async function agregar() {
        reiniciarTabla();
        let integrante1 = document.querySelector("#integrante1").value;
        let integrante2 = document.querySelector("#integrante2").value;
        let integrante3 = document.querySelector("#integrante3").value;
        let integrante4 = document.querySelector("#integrante4").value;
        let integrante5 = document.querySelector("#integrante5").value;
        let datos = {
            "integrante1": integrante1,
            "integrante2": integrante2,
            "integrante3": integrante3,
            "integrante4": integrante4,
            "integrante5": integrante5,
        }

        try {
            let res = await fetch(url, {
                "method": "POST",
                "headers": { "Content-type": "application/json" },
                "body": JSON.stringify(datos)
            })
            let json = await res.json();
            console.log(json);
        }
        catch (error) {
            console.log(error);
        }

        cargarApi();
        console.log(grupos);
    }


    function actualizarTabla(arreglo) {
        reiniciarTabla();
        for (let i = 0; i < arreglo.length; i++) {
            cuerpoTabla.innerHTML +=
                "<tr> <td>" + arreglo[i].integrante1 + "</td>" +//cambio los clase precargar... y escribirlos asi?
                "<td>" + arreglo[i].integrante2 + "</td>" +
                "<td>" + arreglo[i].integrante3 + "</td>" +
                "<td>" + arreglo[i].integrante4 + "</td>" + //preguntar por estos numeros que no toman en el precargar
                "<td>" + arreglo[i].integrante5 + "</td> </tr>"
        }
    }

   


}
