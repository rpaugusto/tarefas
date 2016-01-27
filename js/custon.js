/*
 * funções do documento.
 */
$(document).ready(function () {

    $('form[name="frmLogin"]').submit(function () {
        //console.log('clicou');
        var frma = $(this);
        var btn = $(this).find(':button');

        $.ajax({
            url: "../app/controllers/usuario.php",
            type: "POST",
            data: "acao=login&" + frma.serialize(),
            beforeSend: function () {
                btn.attr('disabled', true);
                //$('.load').fadeIn('slow');
            },
            success: function (retorno) {
                btn.attr('disabled', false);
                //console.log(retorno);
                
                if (retorno === 'error'){
                    msg('Login ou senha não connfere!');
                } else if (retorno === 'vazio'){
                    msg('Campo usuario ou senha em branco!')
                } else{
                    frma.fadeOut('slow', function(){
                        $('.load').fadeIn('slow');
                    });
                    
                }
            }
        });



        /*console.log($(this).serialize());*/

        return false;
    });

    function msg(msg) {
        var retorno = $('.retorno');
        
        retorno.empty().fadeOut('fast', function(){
            return $(this).html('<div class="alert alert-warning" role="alert">'+msg+'</div>').fadeIn('slow');
        });
        
        setTimeout(function(){
            retorno.fadeOut('fast');
        },4000);
    }

});

