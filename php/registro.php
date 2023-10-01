<?php
include("conexion.php");
$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$password = $_POST["password"];



// Procedimiento para podernos registrar a la base de datos desde el login
if (isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO logs (usuario,nombre,apellido,mail,password)
    values ('$usuario', '$nombre', '$apellido', '$mail', '$password')";

    if(mysqli_query($conex, $sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con éxito: $nombre $apellido'); window.location='../login.php' </script>";
    }
    else{
        echo "Error al registrarse intente de nuevo: ".$sql."<br>".mysqli_error($conex);
    }
}

?>