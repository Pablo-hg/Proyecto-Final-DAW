(document).ready(function(){

    //Mensajes
    var input_tipo = $("input[name=tipo-mensaje]");
    var input_texto = $("input[name=texto-mensaje]");
    if (input_tipo.length && input_texto.length){
        //var contenido = $('<span class="'+ input_tipo.val() +'">'+ input_texto.val() +'</span>');
        M.toast({html: input_texto.val(), classes: input_tipo.val() + " lighten-5"});
    }

    //Ocultar toast
    $(".toast").click(function () {
        $(this).hide();
    });


});
