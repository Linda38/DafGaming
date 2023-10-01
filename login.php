
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Daf Gaming</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>


    <!-- REGISTRATION LOGIN -->
    <div class="container" id="container">
    <div class="form-container sign-up-container">
    <form action="php/registro.php" method="POST">  
    <h3 class="create-account">CREAR CUENTA</h3>
    <img class="logo-create" src="img/logo.png" alt="Logo Oficial Daf Gaming">
    

    <h4 class="data-create">Crea un usuario y contraseña para registrarte</h4>
    <div class="global-input">
    <div class="input-group">
    <input type="text" class="input" name="usuario" required>
    <label class="user-label">Usuario</label>    
    </div>

    <div class="input-group">
    <input type="text" class="input" name="nombre" required>  
    <label class="user-label">Nombre</label>
    </div>

    <div class="input-group">
    <input type="text" class="input" name="apellido" required>
    <label class="user-label">Apellido</label>        
    </div>

    <div class="input-group">
        <input type="email" class="input" name="mail" required>
        <label class="user-label">Correo</label>        
    </div>

    <div class="input-group">
        <input type="text" class="input" name="password" required>
        <label class="user-label">Contraseña</label>             
    </div>        
    </div>

    <button class="btnregistro" name="btnregistrar">REGISTRARSE</button>
    </form>
    </div>

    <!-- LOGIN INICIO DE SESIÓN -->
    <div class="form-container sign-in-container">
    <form action="autentificar.php" method="POST">
    <h3 class="title-home">INICIO DE SESIÓN</h3>
    <img class="logo-home" src="img/logo.png" alt="Logo Oficial Daf Gaming">


    <h4 class="text-home">Use su usuario y contraseña para iniciar</h4>
    <div class="global-home">
        <div class="input-home">
            <input type="text" class="inputcito" name="txtusuario" required autocomplete>
            <label class="home-label">Usuario</label>
        </div>

<!--         <div class="input-home">
            <input type="email" class="inputcito" name="txtcorreo" required>
            <label  class="home-label">Correo</label>            
        </div>
-->
        <div class="input-home">
            <input type="password" class="inputcito" name="txtpassword" required>
            <label class="home-label">Contraseña</label>            
        </div>
    </div>

    <div class="mb-3">
        <div class="g-recaptcha" data-sitekey="6LfV31UkAAAAADWVTxarH2xGte6o6iN4pyluSCs_"></div>
    </div>

    <button class="btniniciar" type="submit" name="enviar" name="btningresar">INICIAR SESIÓN</button>
    </form>
    </div>


    <div class="overlay-container">
    <div class="overlay">
    <div class="overlay-panel overlay-left">


    <h3 class="welcometodaf" >BIENVENIDOS A DAF GAMING</h3>
    <p class="text-welcome">¡REGISTRATE EN NUESTRA WEB!</p>
    <button class="press" id="signIn">INICIAR SESIÓN</button>
    </div>


    <div class="overlay-panel overlay-right">
    <h3 class="welcometogaming">DAF GAMING</h3>
    <p class="dedicate">¡DEDICADOS AL GAMING!</p>
    <button class="press" id="signUp">REGISTRARSE</button>
    </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/login.js"></script>
</body>
</html>