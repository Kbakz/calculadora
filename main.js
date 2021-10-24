$(function(){
    var visorCalc = $('#visor-op');
    var visorRes = $('#visor-res');
    $('form .exp').click(function(){
        var valorAtual = $(this).val();
        var valorAntigo = visorCalc.val();

        //Exibir valores no visor.
        if(valorAntigo == ''){
            visorCalc.val(valorAtual);
            expressao = visorCalc.val();
        }else{
            visorCalc.val(valorAntigo+valorAtual);
            expressao = visorCalc.val();
        }
        
        //Apagar ultimo caracter.
        if($(this).attr('name') == 'apagar'){
           visorCalc.val(valorAntigo.slice(0, -1));
        }

        //Wxibir resultado da operação.
        if($(this).attr('name') == 'result'){
            resultado = eval(expressao); 
            visorCalc.val(resultado);
            visorRes.html(resultado);
        }

        //Limpar visor
        if($(this).attr('name') == 'ce'){
            resultado = eval(expressao);
            visorCalc.val('');
            visorRes.html('');
        }

        return false;
    })

    //Exibir resultado ao precionar enter.
    $('#visor-op').keypress(function(e) {
        if(e.which == 13){
            resultado = eval(visorCalc.val());
            setTimeout(function(){
                visorCalc.val(visorCalc.val().slice(0, -1));
            },1); 
            visorCalc.val(resultado);
            visorRes.html(resultado);
        };
    })

    
})