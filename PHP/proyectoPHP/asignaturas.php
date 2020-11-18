<!DOCTYPE html>
<html lang="en">
<head>
<title>Administracion de Sistemas Informaticos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
</head>
<body>
<div>
  <img src="img/uni.png">
  <h2>Asignatura UNI_EIBAR</h2>
</div>

<section>
  <article> 
    <p>
        <ul>
            <li><a href="subpaginas/administracion.php">ADMINISTRACION</a></li>
            <li> INFORMATICA</li>
            <li> EKONOMIA</li>
        </ul>
    </p>
  </article>
</section>
<section>
  <form action="administracion.php" method=POST>
  
      <label for="nombre">Nombre</label><br>
      <input type="text" name="nombre">
       <br>   
      <label  for="apellido">Apellido</label><br>
      <input type="text" name="apellido">

  <p>
    <label for="asignaturas"><h3>ASIGNATURAS :</h3></label>
    <input type="radio" name="administracion">Administracion</input>
    <input type="radio" name="informatica">Informatica</input>
    <input type="radio" name="economia">Economia</input>
</p>
<p>
      <label for="edad"> Edad </label> 
  </p>
  <p>
  <select name="edad" size="2" multiple>
      <?php
          $edad = rand(1,120);
          for($edad=1; $edad<=120; $edad++)
          {
              print "<option>$edad</option>";
          }
      ?>
  </select>
  </p>
  <p>
      <input type="submit" name="enviar" value="enviar">
      <input type="reset" onclick="borrar()" value="borrar">
      </p>    
  <section>

<footer>
  <p>@uni.eus</p>
</footer>

</body>
</html>