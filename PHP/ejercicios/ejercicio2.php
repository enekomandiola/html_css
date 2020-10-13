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
    Ejercicio1
    Ejemplos.
    Eneko Mandiola
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejercicio1</h1>

  <p>Actualice la página para mostrar mas valores.</p>

  <table>
    <tbody>
    <svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>

<?php

$numero_dados = rand (1,10);
$pares=0;
$impares=0;

for($contador=1; $contador<=$numero_dados; $contador++)
{

  $dado = rand (1,6);
  $resto=fmod($dado,2);

  if($resto == 0)
  {
    $pares=$pares+1;
    
  }
  else
  {
    $impares=$impares+1;
  }
  print "<img src=\"img/dados/$dado.svg\">";
}
print "<p>Pares $pares</p>";
print "<p>Impares $impares</p>";


?>
    </tbody>
  </table>

  <footer>
    <p>Eneko Mandiola</p>
  </footer>
</body>
</html>