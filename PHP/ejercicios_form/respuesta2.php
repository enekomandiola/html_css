<?php
    print "<pre>";
    print_r($_REQUEST);
    PRINT "<pre>";

    

    if(isset($_REQUEST['fruta']))
    {
        $fruta = $_REQUEST['fruta'];
        print "<img src=\"img/frutas/$fruta.svg\" width='100px'>";
    }
    else
    {
        print "NO HAS PUESTO NADA";
    }
?>