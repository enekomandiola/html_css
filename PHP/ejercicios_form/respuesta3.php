<?php
    print "<pre>";
    print_r($_REQUEST);
    PRINT "<pre>";

    $fondo = $_REQUEST['fondo'];
    $texto = $_REQUEST['texto'];

    print "<p style='color:$texto; font-color:100px; background-color:$fondo'> COLORE HAU </p>";

?>