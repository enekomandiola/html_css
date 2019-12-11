<?php
/*echo "<h1>";*/
if (isset($_GET["botones"]))
    echo $_GET["botones"];
/*echo "</h1>";*/
echo "<br>";
if (isset($_GET["gender"]))
    echo $_GET["gender"];

    if (isset($_GET["select"]))
    echo $_GET["select"];
//header("Location: new.html"); /* Redirect browser */