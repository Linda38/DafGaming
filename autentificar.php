<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Daf Gaming</title>
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <!-- Agrega este enlace CDN de SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
    if ((isset($_POST['txtusuario'])) /* && (isset($_POST['txtcorreo'])) */ && (isset($_POST['txtpassword'])))
    {
        $usuario=$_POST['txtusuario'];
/*         $correoo=$_POST['txtcorreo']; */
        $passwoord=$_POST['txtpassword'];

        //aqui deberiamos verificar con Base Datos
        include_once 'coneccion.php';
        $select=$con->prepare('SELECT id_usuario,nombre,apellido,mail FROM logs where
        usuario= :usua /* and mail= :mail */ and password= :pass');
        $select-> bindParam(':usua', $usuario);
/*         $select-> bindParam(':mail', $correoo); */
        $select-> bindParam(':pass', $passwoord);

        $select->execute();
        $datos=$select->fetchAll();
        $id_usuario=0;
        $nombre='';
        foreach ($datos as $registro)
        {
            $id_usuario=$registro['id_usuario'];
            $nombre=$registro['nombre'];
            $apellido=$registro['apellido'];        
        }
        if ($id_usuario>0)
        {
            $_SESSION['admin']='1';
            $_SESSION['nombre']= $nombre;
            $_SESSION['apellido']= $apellido;
            $_SESSION['id_usuario']= $id_usuario;
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Bienvenido $nombre $apellido',
                showConfirmButton: false,
                timer: 1500
            });
            setTimeout(function(){
                window.location='index.php';
            }, 1500);
        </script>";   
        }
        else
        {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: '<span class=\"error-title\">Oops...</span>',
                html: '<span class=\"error-message\">Error al iniciar sesión, verifique sus credenciales de inicio de sesión y vuelva a intentarlo</span>',
            }).then(function() {
                window.location = 'login.php';
            });
        </script>";  
        }
    }
    else
    {
        echo 'datos vacios';
    }

?>