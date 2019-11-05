function validar(campo, alerta, label) {

  let n = campo.value;

  if ( n.length == 0 || isNaN( parseFloat(n) )  ) {

    // Erro
    // Exibir alerta:
    document.getElementById(alerta).style.display = "block";

    // Reporte o campo como inválido
    campo.classList.add("is-invalid");

    // Reportar o label como inválido/atenção:
    document.getElementById(label).classList.add("text-danger");


    // Finalizar
    campo.value = "";
    campo.focus();
    return false;

  }

  // Tudo correto
  document.getElementById(alerta).style.display = "none";
  campo.classList.remove("is-invalid");
  campo.classList.add("is-valid");

  document.getElementById(label).classList.remove("text-danger");

  document.getElementById(label).classList.add("text-success");

  return true;

}

function calcular() {

  let n1 = document.dados.valor1;
  let n2 = document.dados.valor2;
  var valor;
  var inter_min;
  var inter_max;
  var inter_min_max;

  if ( validar(n1, "alerta1", "label1") && validar(n2, "alerta2","label2") ) {
    let valor = (parseFloat(n1.value) / (parseFloat(n2.value) * parseFloat(n2.value))) ;
    if(valor < 18.5){
      res = "Subnutricao";
    }
    else if (valor > 18.5 && valor < 24.9){
      res = "Peso saudavel";
    }
    else if (valor > 25 && valor < 29.9){
      res = "Sobrepeso";
    }
    else if (valor > 30 && valor < 34.9){
      res = "Obesidade grau 1";
    }
    else if (valor > 35 && valor < 39.9){
      res = "Obesidade grau 2";
    }
    else if (valor > 40){
      res = "Obesidade grau 3";
    }
    inter_min = 18.5 * (parseFloat(n2.value) * parseFloat(n2.value))
    inter_max = 24.9 * (parseFloat(n2.value) * parseFloat(n2.value))





    document.dados.resultado.value = res;
    document.dados.pesoidealmin.value = inter_min;
    document.dados.pesoidealmax.value = inter_max;
  }

}
