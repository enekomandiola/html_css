<?php
//Leemos los elementos que nos llagan por medio del metodo GET
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$correo_electronico = $_GET['correo_electronico'];
$color = $_GET['color'];

//Si todavia no se ha dicho la conexion la hacemos
include_once '../conexion/conexion.php';
//UPDATE
$sql_editar = "UPDATE socios SET nombre=?,apellido=?,edad=?,correo_electronico=?,color=? WHERE id=?";
// Como antes, los? evitan el sql injection
$sentencia_update = $gbd->prepare($sql_editar);
$sentencia_update->execute(array($nombre,$apellido,$edad,$correo_electronico,$color,$id));
// en el array se pone valores del BBDD update,


header("location:../EL KLUB/SOCIOS_KLUB.php");//para que una vez que se ejecute esto 
//redirija a esa pagina, para que se cargue
?>


