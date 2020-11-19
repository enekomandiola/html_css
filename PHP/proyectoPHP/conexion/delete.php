<?php
//si todavia no se ha hecho la conexion la hacemos
    include_once 'conexion.php';
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM socios WHERE id=?";
    $sentencia_sql = $gbd -> prepare($sql_delete);
    $sentencia_sql->execute(array($id));

    header("location:../EL KLUB/SOCIOS_KLUB.php");

?>