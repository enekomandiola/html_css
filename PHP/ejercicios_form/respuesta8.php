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
    Controles en formularios 
    Kelya
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio X</h1>

<?php

print "  <p class=\"aviso\"Añade código aquí</p>\n";


$temperatura = trim($_REQUEST["temperatura"]); //trim para que no tenga espacios
$unidad = ($_REQUEST['unidad']);
$cambio=0;



if($temperatura == ""){
  print "<p>No hay valor.</p>\n";
}elseif(is_numeric($_REQUEST['temperatura'])){
  print "<p>La temperatura es: $_REQUEST[temperatura] $_REQUEST[unidad]</p>\n";    
}else {
  print "<p>Valor inválido</p>"; 
}

if(($temperatura <= -273.15) && ($unidad=="Celsius")){
  Print"Número inválido";
}elseif(($temperatura <= -459.67) && ($unidad=="Fahrenheit")){
  Print"Número inválido";  
}elseif($unidad=="Celsius"){
  $cambio=1.8*$temperatura+32;
  print "$cambio F";
}elseif ($unidad=="Fahrenheit"){
  $cambio=($temperatura - 32) / 1.8;
  print "$cambio C";
}


?>

  <p><a href="form8.php">Volver al formulario.</a></p>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
