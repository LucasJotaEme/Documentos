

function verificarAnio(campoAnio){
    var f = new Date();

    var anio =campoAnio.value;

    if (anio == (f.getFullYear()+1)){
        window.alert("AVISO: El campo año no es el año actual.");
    }

}