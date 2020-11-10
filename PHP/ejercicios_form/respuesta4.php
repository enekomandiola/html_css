<?php
    print "<pre>";
    print_r($_REQUEST);
    PRINT "<pre>";

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];

//PARA INTRODUCIR NOMBRES O COSAS
    if(($nombre == "") && ($apellido == ""))
    {
        print "NO HAS INTRODUCIDO UN NOMBRE.";
    }
    else
    {
        print "<h1>RESPUESTA</h1>";
        print "<p style='width:100px'> $nombre $apellido</p>";
    }
?>