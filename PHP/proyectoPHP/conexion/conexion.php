<?php

$link = 'mysql:host=localhost;dbname=socios';
$usuario="root";
$pwd = "";

try { 
    //Intenta hacer algo
        // La variable mbd guardara la conexion a la base de datos
    $gbd = new PDO($link, $usuario, $pwd);
    print "Conectado";
} catch (PDOException $e) { //Si salta un error en el try vendra aqui
    print "¡Error!:" . $e->getMessage() . "<br/>";
    die();
}