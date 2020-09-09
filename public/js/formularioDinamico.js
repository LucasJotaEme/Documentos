
var $grupo = $('#documento_grupo'); 
    
    var $form = $grupo.closest('form');

    
    $grupo.on('change', function() {
        
        // creamos la data, solo con el campo del pais,
        // ya que es el dato relevante en este caso.
        var data = $grupo.serialize();
        
        // Hacemos un envío del formulario, lo que ejecutará el evento preSubmit
        // del listener AddStateFieldSubscriber,
        // y actualizará el campo state, con los estados del pais seleccionado.

        $.ajax({
            url : $form.attr('action'),
            type: $form.attr('method'),
            data : data,
            success: function(html) {

                // la variable html representa toda la página junto con el select de estados.
                // el cual tomamos y colocamos para reemplazar el select actual.

                $('#documento_documentoTipo').replaceWith($(html).find('#documento_documentoTipo'));
            }
        });
        
    });


