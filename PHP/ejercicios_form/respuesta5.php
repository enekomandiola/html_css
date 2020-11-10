<?php 
    print "<pre>";
    print_r($_REQUEST);
    PRINT "<pre>";

$correo = $_REQUEST['confirmar'];
$confirmacion = $_REQUEST['correoelectronico'];
$recibir = $_REQUEST['recibir'];
echo "PHP Version: ".phpversion().'<br>'; 
if(filter_var($confirmacion, FILTER_VALIDATE_EMAIL)){ 
    if($confirmacion == $correo )
    {
        echo $confirmacion;
        print "<p> Esta bien </p>";
    }
    else
    {
        print "<p> No coinciden </p>";
    }
}else{ 
    print "<p>El formato no es correcto</p>";    
} 
?>