<?php
print "<pre>";
print_r($_REQUEST);
print "<pre>";

$grosor = $_REQUEST['grosor_del_borde'];
$tamaño = $_REQUEST['tamano'];
$colores = $_REQUEST['colores'];
if(($grosor != "") && ($tamaño != ""))
{

   print "<svg width='400' height='400'>
   <rect width='$tamaño' height='$tamaño' style='fill:$colores;stroke-width:$grosor;stroke:rgb(0,0,0)'/>
</svg>";

}
else
{
print "EZ DUZU EZEBEZ IPINI";
}


?>
