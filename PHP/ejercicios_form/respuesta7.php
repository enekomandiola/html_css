<?php
print "<pre>";
print_r($_REQUEST);
print "<pre>";

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$edad = $_REQUEST['edad'];
$peso = $_REQUEST['peso'];
$sexo = $_REQUEST['sexo'];
$estadocivil = $_REQUEST['estadocivil'];


if($nombre != "" && $apellido !="" && is_numeric($edad) && is_numeric($peso)
&& isset($sexo)) 
{
    print "<p>nombre:$nombre</p>";
    print "<br>";
    print "<p>apellido:$apellido</p>";
    print "<br>";
    print "<p>edad:$edad</p>";
    print "<br>";
    print "<p>peso:$peso</p>";
    print "<br>";
    print "<p>sexo:$sexo</p>";
    print "<br>";
    print "<p>estadocivil:$estadocivil</p>";

    if (isset($_REQUEST['cine']))
    {
        print "<p>CINE</p>";
    }
    if (isset($_REQUEST['literatura']))
    {
        print "<p>LITERATURA</p>";
    }
    if (isset($_REQUEST['tebeos']))
    {
        print "<p>TEBEOS</p>";
    }
    if (isset($_REQUEST['deporte']))
    {
        print "<p>DEPORTE</p>";
    }
    if (isset($_REQUEST['musica']))
    {
        print "<p>MUSICA</p>";
    }
    if (isset($_REQUEST['television']))
    {
        print "<p>TELEVISION</p>";
    }
}
else
{
print "EZ DUZU EZEBEZ IPINI";
}



?>