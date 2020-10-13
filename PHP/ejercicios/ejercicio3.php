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

 $jugador1_1= 3; //rand(1,6);
 $jugador1_2= 3; //rand(1,6);
 $jugador1_3= 3; //rand(1,6);

 $jugador2_1= rand(1,6);
 $jugador2_2= rand(1,6);
 $jugador2_3= rand(1,6);


 print "<img src=\"img/dados/$jugador1_1.svg\">";
 print "<img src=\"img/dados/$jugador1_2.svg\">";
 print "<img src=\"img/dados/$jugador1_3.svg\">";
 print "</div>";

 print "<div style='background-color:red'";
 print "<img src=\"img/dados/$jugador2_1.svg\">";
 print "<img src=\"img/dados/$jugador2_2.svg\">";
 print "<img src=\"img/dados/$jugador2_3.svg\">";

  $trio1 = false;
  $trio2 = false;

  /* mirar si los jugadores tienen trios*/
 if($jugador1_1==$jugador1_2 && $jugador1_2==$jugador1_3)
 {
  $trio1 = true;
 }
 if($jugador2_1==$jugador2_2 && $jugador2_2==$jugador2_3)
 {
   $trio2 = true;
 }

  /* si los dos tienen trios gana el valor mas grande */
  if($trio1==true && $trio12==true)
  {
    if($jugador1_1>$jugador2_1) /* JUGADOR1 GANA */
    {
      print "<p>GANA JUGADOR1</p>";
    }
    elseif ($jugador1_1<$jugador2_1)
    {
      print "<p>GANA JUGADOR 2</p>"; /* JUGADOR2 GANA*/
    }
    else
    {
      print "<p>EMPATE</p>"; /* EMPATE */
    }
  }

  /* SI LOS DOS HAN OBTENIDO LA MISMA PAREJA */

  if ($trio1 == true && $trio2 == false)
  {
    print "<p> JUGADOR 1 GANA</p>";
  }
  elseif($trio2 == true && $trio1 == false)
  {
    print "<p> JUGADOR 2 GANA</p>";
  }

  /*SI LOS DOS HAN OBTENIDO LA MISMA PAREJA */

    /* JUGADOR1 */
  $pareja1 = false;
  $valor_pareja1=0;
  $pareja2 = false;
  $valor_pareja2=0;

  if($jugador1_1==$jugador1_2 && $jugador1_2==$jugador1_3)
  {
   $trio1 = true;
  }
  elseif($jugador1_1==$jugador1_2)
  {
    $pareja1 = true;
    $valor_pareja1 = $jugador1_1;
  }
  elseif($jugador1_1==$jugador1_3)
  {
    $pareja1 = true;
    $valor_pareja1 = $jugador1_1;
  }
  elseif($jugador1_2 == $jugador1_3)
  {
    $pareja1 = true;
    $valor_pareja1 = $jugador1_2;
  }
  elseif($jugador1_3 == $jugador1_2)
  {
    $pareja1 = true;
    $valor_pareja1 = $jugador1_3;
  }

  /*jugador2 */
  if($jugador2_1==$jugador2_2 && $jugador2_2==$jugador2_3)
  {
    $trio2 = true;
  }
  elseif($jugador2_1 == $jugador2_2)
  {
    $pareja2 = true;
    $valor_pareja2 = $jugador2_1;
  }
  elseif($jugador2_1 == $jugador2_3)
  {
    $pareja2 = true;
    $valor_pareja2 = $jugador2_1;
  }
  elseif($jugador2_2 == $jugador2_3)
  {
    $pareja2 = true;
    $valor_pareja2 = $jugador2_2;
  }
  elseif($jugador2_3 == $jugador2_2)
  {
    $pareja2 =true;
    $valor_pareja2 = $jugaodr2_3;
  }

  //ha obtenido una puntuacion total mayor si los dos han obtenido

  $suma1 = $jugador1_1+$jugador1_2+$jugador1_3;
  $suma2 = $jugador2_1+$jugador2_2+$jugaodr2_3;

  if ($pareja1==true && $pareja2==true) {
      if ($valor_pareja1> $valor_pareja2) {
          print "<p> GANA JUGADOR1</p>";
      } elseif ($valor_pareja2>$valor_pareja1) {
          print "<p>GANA JUGADOR2</p>";
      } else {//en caso de que los dos tengan la misma pareja
          if ($suma1>$suma2) {
              print "<p>GANA JUGADOR 1</p>";
          } else {
              print  "<p>GANA JUGADOR 2</p>";
          }
      }
  }
    {
    if($pareja1 == true && $pareja2 == false)
    {
      print "<p>GANA JUGADOR 1</p>";
    }
    elseif($pareja1==false && $pareja2==true)
    {
      print"<p> Gana jugador 2</p>";
    }
    else{
      if($suma1+$suma2)
      {
      
      }
    }
  }
  
//EJERCICIO 10

$numero_dados = rand (1,10);
$maximo=0;

for($contador=1; $contador<=$numero_dados; $contador++)
{
  $dado = rand (1,6);
  if($dado > $maximo)
  {
    $maximo = $dado;
  }
  print "<img src=\"img/dados/$dado.svg\">";
}
  print "el maximo es $maximo";


//EJercicio 11
$numero_dados = rand (1,10);
$maximo=0;

for($contador=1; $contador<=$numero_dados; $contador++)
{
  $dado = rand (1,6);
  if($dado > $maximo)
  {
    $maximo = $dado;
  }
  print "<img src=\"img/dados/$dado.svg\">";
}
  print "el maximo es $maximo";


//Ejercicio12


?>
    </tbody>
  </table>

  <footer>
    <p>Eneko Mandiola</p>
  </footer>
</body>
</html>