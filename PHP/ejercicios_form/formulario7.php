<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>formulario7</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form action="respuesta7.php" method=POST>

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre">
     <br>   
    <label  for="apellido">Apellido</label><br>
    <input type="text" name="apellido">
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
    <!-- formulario peso y sexo -->
    <label for="peso">Peso:</label>
    <input type="text" name="peso"> KG

    <label style="margin-left:5%" for="sexo"><i><b>Sexo:</b></i></label>
    <input type="radio" name="sexo" value="hombre">Hombre</input>
    <input type="radio" name="sexo" value="mujer">Mujer</input>      

    <!-- formulario estado civil -->
    <label style="margin-left:5%" for="estadocivil"><i><b>Estado Civil:</b></i></label>
     <input type="radio" name="estadocivil" value="soltero">Soltero</input>
     <input type="radio" name="estadocivil" value="casado">Casado</input>
     <input type="radio" name="estadocivil" value="otro">Otro</input>
</p>
<p>
    <label for="aficiones"><h3>Aficiones :</h3></label>
    <input type="checkbox" name="cine">Cine</input>
    <input type="checkbox" name="literatura">Literatura</input>
    <input type="checkbox" name="tebeos">Tebeos</input>
</p>
<p>
    <input type="checkbox" name="deporte">Deporte</input>
    <input type="checkbox" name="musica">Música</input>
    <input type="checkbox" name="television">Televisión</input>
</p>

    <p>
    <input type="submit" name="enviar" value="enviar">
    <input type="reset" onclick="borrar()" value="borrar">
    </p>    
<script>
    function borrar(){
        document.getElementById['nombre'].value ="";
    }
</script>
</form>
</body>
</html>