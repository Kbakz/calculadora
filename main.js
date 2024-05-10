$(function(){
    var operacao = "";
var visor = $("input");
$(".teclado span").click(function(){
  var tecla = $(this).attr("value");
  try{
    calcular(tecla);  
  }catch(err){
    visor.val("erro de sintaxe");
  }
  
})

function calcular(entrada){
  if(visor.val() == "erro de sintaxe" || visor.val() == "erro ao dividir por 0!")
    operacao = "";
    
  if(entrada != "="){
    if(entrada == "CE")
      operacao = "";
    else
      operacao += entrada;
  }else{
    if(operacao == "")
        operacao = "0";
     
     operacao = eval(operacao);
     if(!isFinite(operacao))
      operacao = "erro ao dividir por 0!";
  }
  
  visor.val(operacao);
}

    
})
