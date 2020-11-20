

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>EL KLUB</title>
</head>

<body>
    <div class="">
        <a class="active" href="SOCIOS_KLUB.PHP"> <h3>PARA VER SOCIOS</h3></a>
        <a href="EL_KLUB2.HTML"> <H3>MOMASOS</H3> </a>                     
    </diV>    
    <h1 style="color:black ; background-color:silver" align="center">
        EL KLUB 
    </h1>
    <div align="center">
        <img src="Captura.PNG" width="20%">
</div>
    <table >
    <p>
        <tr>
        <h3 class="hiru">PARA HACER SOCIO</h3>
            <td class="lau">
                
            <form action="SOCIOS_KLUB.PHP" method=POST>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre">
            <br>   
                <label  for="apellido">Apellido</label><br>
                <input type="text" name="apellido">

            <p>
                <label for="edad"> Edad </label> 
            </p>
            <p>
                <select name="edad" size="2" multiple>
                <?php
                    $edad = rand(1,120);
                    for($edad=1; $edad<=120; $edad++)
                    {
                        print "<option>$edad</option>";
                    }
                ?>
                </select>
                <p>
                <label for="correo_electronico">Correo electronico</label>
                <input type="text" name="correo_electronico">
                <p> COLOR FAVORITO </p>
                <p>
                <label for="color"></lable>
                <input type="color" name="color">
                </p>
                <input type="submit" name="enviar" value="enviar">
                <input type="reset" onclick="borrar()" value="borrar">
            </p>
                </form>
    
    </p> 
                </td>
                <td class="bat">
                    <h3 class="bat" >
                        ElKlub<br>
                        El Klub del tiempo libre🤹🏼‍♂🏊🏼🎾<br>
                        Aficiones: Atea-Tala,Tala-Atea<br>
                        Jugacionadores de pala<br>
                        La mejor:@arrate_gorrotxategi<br>
                        La manager: @izaskun_abaroa<br>
                    <a href="www.elclubmanagement.com">www.elclubmanagement.com </a>
                    </h3>
                </td>
            </tr>  
        </table>
    </p>
        <p>
            <!-- <H3 class="bi">
                EL HIMNO DEL EL KLUB
            </H3>
             <audio controls>
                    <source src="../audio/WhatsApp Audio 2019-10-05 at 02.08.58.mp4" type="audio/mpeg">
                
                        Your browser does not support the audio element.
            </audio> -->
        </p>

        <div class="button-container">
            <img src="600px-Instagram-Icon.png"  width="30" height="30" alt="film title">
            <a href="https://www.instagram.com/elklub_ofisial/" >EL KLUB</a>
</div>
<p>
                    <a href="SOCIOS_KLUB.PHP"> <h3>PARA VER SOCIOS</h3></a>
                </p> 
    <P>
            <table>
                <TR>
                    <td class="hiru">
                            <a href="EL_KLUB2.HTML"> <H3>MOMASOS</H3> </a>
                    </td>
            </table>
    </P>

</body>
</html>