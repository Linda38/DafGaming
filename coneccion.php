<?php
    $database="daf_gaming";
	$user='root';
	$password='';
try {
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
} catch (PDOException $e) {
	echo " ERROR AL INICIAR SESIÓN, VERIFIQUE SUS DATOS Y VUELVA A INTENTARLO ". $e->getMessage();
}

?>