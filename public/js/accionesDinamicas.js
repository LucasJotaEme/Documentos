$( document ).ready(function() {
    var divTipoDocumento= $("#divFormTipoDocumento").hide();
    var documentoToggle= $("#documentoToggle").hide();
    var tipoDocumentoToggle= $("#tipoDocumentoToggle").hide();
    var menuDocumento= $("#menuDocumento");
    var menuTipoDocumento= $("#menuTipoDocumento");
    var fechaCaducidad= $('#fechaCaducidad').hide();
    var agregarFecha= $('#documento_agregarFecha');
    
    
    //Fecha caducidad
    agregarFecha.on('click', function(e) {
        fechaCaducidad.slideToggle();
    });

    //Tipo de documentos
    
    menuDocumento.on('click', function(e) {
        documentoToggle.slideToggle();
    });
        
    menuTipoDocumento.on('click', function(e) {
        tipoDocumentoToggle.slideToggle();
    });

    $("#botonTipoDocumento").click(function(){
        divTipoDocumento.slideToggle(400);
        
    });

    $('.leftmenutrigger').on('click', function(e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
    });


    
    
    
});

$(function () {
    $('[data-toggle="popover"]').popover()
})

