<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "daf_gaming";

    $conex = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conex)
{
    die("No hay conexion:" .mysqli_connect_error());
}
?>