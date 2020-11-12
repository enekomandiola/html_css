<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  FORMULARIO 8
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio8</h1>

  <form action="respuesta8.php" method="GET">
    <!-- Añade aquí los elementos de formulario necesarios -->
    <p>

    <p><label for="temperatura">Temperatura:</label><input type="text" name="temperatura">
    <label for="unidad"></label> 
        <select name="unidad">
            <option>Celsius</option>
            <option>Fahrenheit</option>
        </select>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

</body>
</html>
