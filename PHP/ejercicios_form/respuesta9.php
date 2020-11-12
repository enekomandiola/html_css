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


if($numero<=100 && $numero>=0){
print "<table>";
  for ($f=1; $f<=$numero; $f++) {
    print "<tr>";
    for ($c=1; $c<=$numero; $c++) {
      $valor=$c*$f;
      print "<td> $valor <td>";
    }
    print "</tr>";
  }
print "</table>";
}else{
  print"No has puesto un valor válido";
}
?>

  <p><a href="form9.php">Volver al formulario.</a></p>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
