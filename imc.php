<?php
  $altura=$_POST['altura'];
  $peso=$_POST['peso'];
  function calcularImc($peso,$altura){
    $imc=($peso/(pow($altura,2)));
    return $imc;
  }
  function estas($peso,$altura){
    $imc=calcularImc($peso,$altura);
    if ($imc<18 ) {
      echo "etas desnutrido";
    } else if($imc>=18 and $imc<24.9) {
      echo "estas en tu peso normal";
    } else if($imc>=25 and $imc<=26.9){
      echo "Tienes sobrepeso";
    }
    
  }
  estas($peso,$altura);
?>