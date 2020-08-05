

function verificarAnio(campoAnio){
    var f = new Date();

    var anio =campoAnio.value;

    if (anio == (f.getFullYear()+1)){
        window.alert("AVISO: El campo año no es el año actual.");
    }

}

function contadorTitulo(titulo){
    var mensaje= document.getElementById('mensajeTitulo');
    var caracteresFaltantes=  (20-(titulo.value.length+1));
    if (caracteresFaltantes<=0){
        mensaje.innerHTML="Válido";
    }else{
        mensaje.innerHTML="Faltan "+ (20-(titulo.value.length+1)) + " caracteres";
    }
}