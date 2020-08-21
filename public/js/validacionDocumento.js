

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

var idObsoleto=0;

function idObsoletear(id){
    idObsoleto=id;
}

function direccionarParaObsoletear(){
    //Sirve para redireccionar desde acá el documento para obsoleto. Desde twig o html no se puede.

    //Mensaje de error
    var mensajeMotivo= document.getElementById('mensajeMotivo');

    //Input de obsoleto, donde se hace validación.
    var inputObsoleto= document.getElementById('inputObsoleto');

    if (inputObsoleto.value.length >= 10){
        //location.href ="http://localhost/Documentos/public/index.php/editor/eliminarDocumento/" + idObsoleto + "/" + inputObsoleto.value;
        location.href ="http://intranet.unraf.edu.ar/Documentos/public/index.php/editor/eliminarDocumento/" + idObsoleto + "/" + inputObsoleto.value;
    }else{
        mensajeMotivo.style.color="red";
        mensajeMotivo.innerHTML="Mínimo 10 caracteres.";
    }
}