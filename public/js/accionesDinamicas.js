$( document ).ready(function() {
    var divTipoDocumento= $("#divFormTipoDocumento").hide();
    var documentoToggle= $("#documentoToggle").hide();
    $('.side-nav').toggleClass("open");
    var tipoDocumentoToggle= $("#tipoDocumentoToggle").hide();
    var menuDocumento= $("#menuDocumento");
    var menuTipoDocumento= $("#menuTipoDocumento");
    
    
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

