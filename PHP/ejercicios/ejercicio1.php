<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author ENEKO
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Eneko Mandiola
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php

    $a=5;
    $b=4;
    $suma= $a + $b;
  print "<p>suma: $a + $b = $suma </p>";
  print "<p>suma: $a + $b = ".$suma. "</p>";
  print "<p>suma: $a + $b = $a + $b </p>";
  print "<p>suma: $a + $b = ".($a + $b)." </p>";


  $texto1 = "¡HOLA!";
  $texto2 = "¿Que tal?";
  $texto3 = "¡Adios!";


  $textoTotal = $texto1." ".$texto2."".$texto3;

  print "<h1>$textoTotal</h1>";
  print "<h3>$texto2</h3>";
  print "<h3>$texto3</h3>";
  print "<h3>$texto1</h3>";

  $ancho=3;
  print "<p>La mesa es redonda 2.0 ".$ancho."m</p>";
  print "<p>La mesa es redonda 2.0 {$ancho}m</p>";

  $alumnos =["Joseba","Jon Ander", "Kelya", "Xabier","Alex"];

  print "<p>El primer alumno es: $alumnos[4]</p>";
  print "<p>El primer alumno es: $alumnos[1]</p>";

  $cuadrados = [3 =>9, 5=> 25, 10 => 100];
  print "<p>El cuadrado de 3 es $cuadrados[10]</p>";
  print "<p>El primer alumno es: $alumnos[4]/p>";

  $edades = ["Irati"=>34, "Joseba"=>32, "Jon Ander"=>30];

  print "<p>El primer alumno es: $edades[Irati]</p>";

  $aleatorio = rand(1,50);
  print "<p>El primer alumno es: $aleatorio</p>";

  print "<table> <tr></tr>";

  $a = 8;
  $b = 7;

  if($a!=5){
      print "<p>A no es 5.</p>\n";
  }
  elseif ($a<7){
    print "<p>A es menor que 7.</p>\n";
  }
  else{
    print "<p>A no es menor que 7.</p>\n";
  }

  for($contador = 10; $contador <50; $contador++){
      print"<p>EL valor es $contador </p>\n";
  }

  for($contador =1; $contador <=6; $contador++){
      print"<img src='img/dados/$contador.svg'";
  }


?>
    </tbody>
<img src="img/dados/1.svg">
  </table>

  <footer>
    <p>Eneko Mandiola</p>
  </footer>
</body>
</html>
