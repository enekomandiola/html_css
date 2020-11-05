<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
<table>
    <?php

    $fila=[1,2,3];
    $columnas=[1,2,3,4];
    if(isset($_REQUEST['numero'] (is_numeric($_REQUEST['numeric']))))
    {
        
    }
    for ($fila=1; $fila<=$numero; $fila++) {
        print "<tr>";
    

        for ($columnas=1; $columnas<=$numero; $columnas++) {
            $valor = $columnas * $filas;

            print "<td>$valor</td>";
        }
    }
    ?>
</table>
</body>
</html>
