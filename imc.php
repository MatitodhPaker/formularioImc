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
    } else if($imc>=18 and $imc<24.4) {
      echo "estas en tu peso normal";
    }
    
  }
  estas($peso,$altura);
?>