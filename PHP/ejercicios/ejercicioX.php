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

  $vidas = 5;
  $nombre = "Eneko";

  print '<p>Hola' .$nombre. '</p>';
  print "<p>Tienes $vidas vidas '$nombre' muerte. </p>";

  print "<p>LA VARIABLE SE \"ESPECIFICA\" ASI \$nombre. </p>";

?>
    </tbody>
  </table>

  <footer>
    <p>Eneko Mandiola</p>
  </footer>
</body>
</html>
