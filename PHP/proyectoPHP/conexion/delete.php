<?php
    include_once 'conexion.php';
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM colores WHERE id=?";
    $sentencia_sql = $gbd -> prepare($sql_delete);
    $sentencia_sql->execute(array($id));

    header("location:index.php");

?>