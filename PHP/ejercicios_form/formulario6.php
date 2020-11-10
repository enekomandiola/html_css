<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>formulario6</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form action="respuesta6.php" method=POST>

    <label for="tamano">Tamaño</label><input type="text" name="tamano">

    <p><label for="formas"></label>
        <select name="formas" size="2" multiple>
        <option   >cuadrado</option>
        <option  >circulo</option>
        </select></p>

    <input type="submit" name="calcular" value="Calcular">


</form>
</body>
</html>