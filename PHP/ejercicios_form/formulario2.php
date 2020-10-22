<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FORMULARIO1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form action="respuesta2.php" method=POST>

<?php

$fruta = ['cerezas','fresa', 'limon', 'manzana', 'naranja', 'pera'];

    for( $contador = 0; $contador < 5 ; $contador++)
    {
        print $fruta[$contador];

        print "<input type='radio' name='fruta' value='$fruta[$contador]'>";

        //print "<img= src\"img/frutas/$fruta.svg \">";
    }

?>

<input type="submit" name="enviar" value="enviar">


</form>
</body>
</html>