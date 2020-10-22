<?php
    print "<pre>";
    print_r($_REQUEST);
    PRINT "<pre>";
    $nombre = $_REQUEST['nombre'];

    if($nombre == "")
    {
        print "NO HAS INTRODUCIDO UN NOMBRE.";
    }
    else
    {
        print style="fill:rgb(0,0,255);stroke-width:3;;stroke:rgb(0,0,0)";
    }


    <svg width="400" height="110">
    <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;;stroke:rgb(0,0,0)"/>
 </svg>


    if(isset($_REQUEST["aceptar"]))
    {
        print "Has aceptado las condiciones";
    }
    else
    {
        print "No has aceptado las condiciones"; 
    }

    if(isset($_REQUEST["ciclos"]))
    {
        if($ciclo == "DAW")
        {
            print "Vas a hacer paginas web muy bonitas";
        }
        elseif($ciclo == "DAM")
        {
            print "vas a crear un juego para Android";
        }
        else
        {
            print "Vas a montar la red de UNI Ermua";
        }
    }

    if(isset($_REQUEST["intereses2"]))
    {
        print "tiene intereses";
        $intereses2 = $_REQUEST["intereses2"];
        foreach($intereses2 as $interes){ //por cada uno de los elementos del array interes 
            print "Estas interesado en $interes .";
        }
    }
    else
    {
        print "no tiene intereses";
    }
?>

