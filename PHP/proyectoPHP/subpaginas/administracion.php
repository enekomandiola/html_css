<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>colores</title>
    </head>
    <body>
    <table>
        <?php
            foreach($resultado as &$color){
                print "<tr style=\"background-color:$color[color]\">
                        <td>$color[color]</td>
                        <td>$color[descripcion]</td>
                        <td><a href=\"index.php?id=$color[id]\">&#128221</a></td>
                        <td><a href=\"delete.php?id=$color[id]\">&#128465</a></td>
                        </tr>";
            }
        ?>
      
    </table>
    <?php if($_GET): ?>
    <form action="edit.php" method="GET">
            <input type="hidden" name="id" value="<?php print $resultado_id["id"] ?>">
            <p>
                <label for="color">color</label>
                <input type="text" name="color" value="<?php print $resultado_id['color'] ?>">
            </p>
            <p>
                <label for="descripcion">descripcion</label>
                <input type="text" name="descripcion" value="<?php print $resultado_id['descripcion'] ?>">
            </p>
            <p><button>EDITAR</button></p>
    </form>
    <?php endif ?>

    <?php if(!$_GET): ?>
    <form action="index.php" method="POST">
            <p>
                <label for="color">color</label>
                <input type="text" name="color" >
            </p>
            <p>
                <label for="descripcion">descripcion</label>
                <input type="text" name="descripcion" >
            </p>
            <p><button>AÑADIR</button></p>
    </form>
    <?php endif ?>
    </body>
    </html>