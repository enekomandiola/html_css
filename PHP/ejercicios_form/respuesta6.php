<?php
print "<pre>";
print_r($_REQUEST);
print "<pre>";

$formas = $_REQUEST['formas'];
$tamano = $_REQUEST['tamano'];


if(($_REQUEST['tamano'] != "" ))
{
    if ($formas =='cuadrado')
    {
        print "<svg width='400' height='400'>
    <rect width='$tamano' height='$tamano' style='fill:red;stroke-width:;stroke:rgb(0,0,0)'/>
    </svg>";
    }
    else if ($formas =='circulo')
    {
       print "<svg height='400' width='400'>
        <circle cx='$tamano' cy='$tamano' r='$tamano' stroke='black' stroke-width='3' fill='red' />
        </svg>";
    }
}
else
{
print "EZ DUZU EZEBEZ IPINI";
}



?>