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

    valor =  (Math.log10(parseFloat(n1.value))) + 3 * Math.log10(8 * parseFloat(n2.value)) - 2.92;

    if(valor < 3.5){
      res = "Geralmente nao sentido, mas gravado";
    }
    else if (valor > 3.5 && valor < 5.4){
      res = "As vezes sentido mas raramente causa danos";
    }
    else if (valor > 5.5 && valor < 6){
      res = "No maximo causa pequenos danos a predios bem construidos, causa danos a casas mal construidas";
    }
    else if (valor > 6.1 && valor < 6.9){
      res = "Pode ser destrutivo ate 100m do epicentro";
    }
    else if (valor > 7.0 && valor < 7.9){
      res = "Grande terremoto. Serios danos a uma grande area";
    }
    else if (valor > 8){
      res = "Enorme terremoto. Graves danos em muitas areas mesmo a quilometros";
    }

    document.dados.resultado.value = valor;
    document.dados.efeitos.value = res;

  }

}
