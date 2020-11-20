<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>SOCIOAS</title>
</head>
<body>
<div class="topnav">
        <a class="active" href="SOCIOS_KLUB.PHP"> 
        <h3>PARA VER SOCIOS</h3></a>
        <a  href="EL_KLUB2.HTML"> 
        <H3>MOMASOS</H3> </a>
        <a  href="EL KLUB.PHP"> 
        <H3>INICIO</H3> </a>
        <img src="600px-Instagram-Icon.png"  width="30" height="30" alt="film title">
            <a href="https://www.instagram.com/elklub_ofisial/" >EL KLUB</a>
                     
    </diV>
        <h1 style="color:black ; background-color:silver" align="center">
        SOCIOS DE EL KLUB 
</h1>
<div class="button-container">
 </div>
<?php
    include_once '../conexion/conexion.php';

        /** Select de la base de datos */
    $sql_lectura = "SELECT * FROM socios"; // Sentencia SQL que queremos ejecutar

    $sentencia_select = $gbd->prepare($sql_lectura);
        //$gbd guarda la conexion creada en el archivo conexion.php
        //$sentencia_select sera usada para ejecutar la sentencia

    $sentencia_select->execute();
        //para que se ejecute la sentencia que hemos preparado
    $resultado = $sentencia_select->fetchAll();
        //fetchall nos devuelte una matriz con el resultado de la sentencia

/***INSERT en la base de datos */
            if($_POST){//si le llegan los datos de un formulario
                $nombre = $_POST["nombre"];//busca el valor del input llamado color
                $apellido= $_POST["apellido"];//buscara el valor del input llamado apellido
                $edad = $_POST["edad"];
                $correo_electronico = $_REQUEST["correo_electronico"];
                $color = $_REQUEST["color"];
        
                if ($nombre !="" && $apellido !="" && $edad !="" && $correo_electronico !="") {
                    $sql_insert = "INSERT INTO socios(nombre,apellido,edad,correo_electronico,color) VALUES (?,?,?,?,?)";
                    //poniendo ? evitamos que nos hagan SQL injection
                    $sentencia_insert = $gbd->prepare($sql_insert);
                    $sentencia_insert->execute(array($nombre,$apellido,$edad,$correo_electronico,$color));
                    //le damos un valor a los ?
                    header("location:SOCIOS_KLUB.PHP");
                    //cuando se ejecute se redirija a la pagina socios
               }
            }
/** SELECT cunado recibimos una ID */
           if($_GET){
                $id =$_GET['id'];
                $sql_lectura_id = "SELECT * FROM socios WHERE id=?"; //Sentencia SQL que queremos ejecutar
                $sentencia_select_id = $gbd->prepare($sql_lectura_id);
                $sentencia_select_id->execute(array($id));
                $resultado_id = $sentencia_select_id->fetch();
//fetch porque viene solo un resultado
            }
?>
    <p>
    <table >
        <?php
            
            foreach($resultado as &$dato) //de la matriz del resultado toma un dato (una tupla)
            {
                $fondo = $dato['color'];
                print "<tr style=\"background-color:$fondo\">
                        <td>$dato[nombre]</td>
                        <td>$dato[apellido]</td>
                        <td>$dato[edad]</td>
                        <td>$dato[correo_electronico]</td>
                        <td><a href=SOCIOS_KLUB.PHP?id=$dato[id]>&#128221</a></td>
                        <td><a href=../conexion/delete.php?id=$dato[id]>&#128465</a></td>
                        </tr>";
            }
        ?>
        </table>
        <?php if($_GET): ?>
    <form action="../conexion/edit.php" method="GET">
            <input type="hidden" name="id" value="<?php print $resultado_id["id"] ?>">
            <p>
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" value="<?php print $resultado_id['nombre'] ?>">
            </p>
            <p>
                <label for="apellido">apellido</label>
                <input type="text" name="apellido" value="<?php print $resultado_id['apellido'] ?>">
            </p>
            <p>
                <label for="edad">edad</label>
                <input type="text" name="edad" value="<?php print $resultado_id['edad'] ?>">
            </p>
            <p>
                <label for="correo_electronico">correoelectronico</label>
                <input type="text" name="correo_electronico" value="<?php print $resultado_id['correo_electronico'] ?>">
            </p>
            <p>
                <label for="color"></lable>
                <input type="color" name="color" value="<?php print $resultado_id['color'] ?>">
            </p>
            <p><button>EDITAR</button></p>
    </form>
    <?php endif ?>
    </p>
        <p>
            <!-- <H3 class="bi">
                EL HIMNO DEL EL KLUB
            </H3>
             <audio controls>
                    <source src="../audio/WhatsApp Audio 2019-10-05 at 02.08.58.mp4" type="audio/mpeg">
                
                        Your browser does not support the audio element.
            </audio> -->
        </p>



</body>
</html>
