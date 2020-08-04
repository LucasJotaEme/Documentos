$(function() { 
    var divTipoDocumento= $("#divFormTipoDocumento").hide();
    
    
    $('.leftmenutrigger').on('click', function(e) {
        $('.side-nav').toggleClass("open");
        e.preventDefault();
    });
    
    //Tipo de documentos
    
    $("#botonTipoDocumento").click(function(){
        divTipoDocumento.slideToggle(400);
        
    });
    
    //ACCESO SISTEMAS Y NOVEDADES
    
    
    var elemento;
    for (i=1;i<10;i++){
        elemento= '#card' + i;
        $(elemento).flip({
            axis: 'x',
            trigger: 'hover',
            reverse: true
        }
        );
    }
    
    
    
});


