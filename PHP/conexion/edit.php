<?php
//Leemos los elementos que nos llagan por medio del metodo GET
$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];

//Si todavia no se ha dicho la conexion la hacemos
include_once 'conexion.php';
//UPDATE
$sql_editar = "UPDATE colores SET color=?, descripcion=? WHERE id=?";
// Como antes, los? evitan el sql injection
$sentencia_update = $gbd->prepare($sql_editar);
$sentencia_update->execute(array($color, $descripcion,$id));
// en el array se pone valores del BBDD update,


header("location:index.php");//para que una vez que se ejecute esto 
//redirija a esa pagina, para que se cargue
?>


