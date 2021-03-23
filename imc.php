<!doctype html>
<html lang="en">
  <head>
    <title>imc</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
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
                  }else if($imc>=27 and $imc<=27.9){
                    echo "Tienes obesidad";
                  }else if($imc>=28 and $imc<=29.9){
                    echo "Tienes obesidad de grado 1 riesgo alto para desarollar enfermedades cardiovasculares";
                  }else if($imc>=30 and $imc<=39.9){
                    echo "Tienes obesidad de grado 2 riesgo muy alto para desarollar enfermedades cardiovasculares";
                  }else if($imc>40){
                    echo "Tienes obesidad grado 3 Extrema o morbida riesgo etremadamente alto para desarollar enfermedades cardio vasculares";
                  }
                  
                }
              estas($peso,$altura);
            ?>
            <a href="index.php" class="btn btn-primary">regresar</a>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>