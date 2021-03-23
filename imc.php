<?php
  $altura=$_POST['altura'];
  $peso=$_POST['peso'];
  function calcularImc($peso,$altura){
    $imc=($peso/(pow($altura,2)));
    return $imc;
  }
  echo calcularImc($peso,$altura);
?>