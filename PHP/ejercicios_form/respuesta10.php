<?php
/**
 * Controles en formularios
 *
 * @author Kelya
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>

  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1></h1>

<?php

$numero = trim($_REQUEST['numero']);
$max=0;
$total = array();

if ($numero<=10 && $numero>=3) {

}else{
  print "<p>Introduzca un número valido</p>";
}  


for($contador=1; $contador<=$numero; $contador++){  //variable jugadores
    print "<p><b>Jugador $contador</b></p>";
    $carta=array();  //variable cartas Aqui guarda el valor pero se sobreescribe
    for($contadorcarta=1; $contadorcarta<=3; $contadorcarta++){
      $carta[$contadorcarta]=rand(1,2);
      print"<img src='img/cartas/c$carta[$contadorcarta].svg'>";
    }
    $total[$contador] = $carta[1]+$carta[2]+$carta[3];  //Para que sume los 3 valores de las cartas
    if($carta[1]==$carta[2] && $carta[2]==$carta[3]){ //por si hay trio
      print"<br><b>trio";
    }else{
      print"<br>nada";
    }

  }

print"<br><br>";
print_r($total);

for ($contador=1; $contador<=$numero; $contador++) {
  if ($max<$total[$contador]) {
      $max=$total[$contador];
  }
}

print"<br><br>$max";

?>

  <p><a href="form10.php">Volver al formulario.</a></p>

</body>
</html>
