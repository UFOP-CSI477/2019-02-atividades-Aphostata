
function verificar() {

  let n1 = document.dados.gato;
  let n2 = document.dados.cachorro;
  let n3 = document.dados.maca;
  let n4 = document.dados.bola;
  let n5 = document.dados.televisao;
  let n6 = document.dados.cadeira;
  let n7 = document.dados.lapis;
  let n8 = document.dados.bicicleta;
  let n9 = document.dados.sol;

  let k1 = n1.value;
  let k2 = n2.value;
  let k3 = n3.value;
  let k4 = n4.value;
  let k5 = n5.value;
  let k6 = n6.value;
  let k7 = n7.value;
  let k8 = n8.value;
  let k9 = n9.value;

 //========================== Verifica Gato ============================ 
  if ( k1.length == 0 ) {  
    document.getElementById('alertagato').style.display = "block";
    n1.classList.add("is-invalid");
    n1.value = "";
    n1.focus();
  }
  if(k1 == "Gato"){
    document.getElementById('alertagatosuc').style.display = "block";
    document.getElementById('alertagato').style.display = "none";
    n1.classList.remove("is-invalid");
    n1.classList.add("is-valid");
  }
 //========================== Verifica Cachorro ============================
  if ( k2.length == 0 ) {  
    document.getElementById('alertacachorro').style.display = "block";
    n2.classList.add("is-invalid");
    n2.value = "";
    n2.focus();
  }
  if(k2 == "Cachorro"){
    document.getElementById('alertacachorrosuc').style.display = "block";
    document.getElementById('alertacachorro').style.display = "none";
    n2.classList.remove("is-invalid");
    n2.classList.add("is-valid");
  }
 //========================== Verifica Maçã ============================
  if ( k3.length == 0 ) {  
    document.getElementById('alertamaca').style.display = "block";
    n3.classList.add("is-invalid");
    n3.value = "";
    n3.focus();
  }
  if(k3 == "Maçã"){
    document.getElementById('alertamacasuc').style.display = "block";
    document.getElementById('alertamaca').style.display = "none";
    n3.classList.remove("is-invalid");
    n3.classList.add("is-valid");
  }
//========================== Verifica Bola ============================
  if ( k4.length == 0 ) {  
    document.getElementById('alertabola').style.display = "block";
    n4.classList.add("is-invalid");
    n4.value = "";
    n4.focus();
  }
  if(k4 == "Bola"){
    document.getElementById('alertabolasuc').style.display = "block";
    document.getElementById('alertabola').style.display = "none";
    n4.classList.remove("is-invalid");
    n4.classList.add("is-valid");
  }
//========================== Verifica Televisao ============================
  if ( k5.length == 0 ) {  
    document.getElementById('alertatelevisao').style.display = "block";
    n5.classList.add("is-invalid");
    n5.value = "";
    n5.focus();
  }
  if(k5 == "Televisão"){
    document.getElementById('alertatelevisaosuc').style.display = "block";
    document.getElementById('alertatelevisao').style.display = "none";
    n5.classList.remove("is-invalid");
    n5.classList.add("is-valid");
  }
//========================== Verifica Cadeira ============================
  if ( k6.length == 0 ) {  
    document.getElementById('alertacadeira').style.display = "block";
    n6.classList.add("is-invalid");
    n6.value = "";
    n6.focus();
  }
  if(k6 == "Cadeira"){
    document.getElementById('alertacadeirasuc').style.display = "block";
    document.getElementById('alertacadeira').style.display = "none";
    n6.classList.remove("is-invalid");
    n6.classList.add("is-valid");
  }
  //========================== Verifica Lapis ============================
  if ( k7.length == 0 ) {  
    document.getElementById('alertalapis').style.display = "block";
    n7.classList.add("is-invalid");
    n7.value = "";
    n7.focus();
  }
  if(k7 == "Lápis"){
    document.getElementById('alertalapissuc').style.display = "block";
    document.getElementById('alertalapis').style.display = "none";
    n7.classList.remove("is-invalid");
    n7.classList.add("is-valid");
  }
//========================== Verifica Bicicleta ============================
  if ( k8.length == 0 ) {  
    document.getElementById('alertabicicleta').style.display = "block";
    n8.classList.add("is-invalid");
    n8.value = "";
    n8.focus();
  }
  if(k8 == "Bicicleta"){
    document.getElementById('alertabicicletasuc').style.display = "block";
    document.getElementById('alertabicicleta').style.display = "none";
    n8.classList.remove("is-invalid");
    n8.classList.add("is-valid");
  }
//========================== Verifica Sol ============================
  if ( k9.length == 0 ) {  
    document.getElementById('alertasol').style.display = "block";
    n9.classList.add("is-invalid");
    n9.value = "";
    n9.focus();
  }
  if(k9 == "Sol"){
    document.getElementById('alertasolsuc').style.display = "block";
    document.getElementById('alertasol').style.display = "none";
    n9.classList.remove("is-invalid");
    n9.classList.add("is-valid");
  }





}
