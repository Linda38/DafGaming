<?php
include "session.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/inicio.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
    <title>Daf Gaming - Inicio</title>
</head>

<body>

    <!-- Carga -->
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>


    <!-- Barra de navegación -->
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#"><img src="img/logo.png" alt="Logo Oficial Daf Gaming"></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li><a class="priv" href="#!">Inicio</a></li>
                    <!-- Barra de navegación con sistema de desplazamiento -->
                    <li><a class="priv" href="./tienda.php">Nuestra Tienda</a></li>
                    <!-- Segundo apartado con sistema de desplazamiento -->
                    <!-- Apartado-->
                    <?php if (!estaLogeado()): ?>
                        <li><a class="priv" id="login-link" href="login.php">Iniciar Sesión</a></li>
                    <?php endif; ?>
                    <!-- Apartado-->
                    <li><a class="priv" href="php/error.php">Contacto</a></li>
                    <?php if (estaLogeado()): ?>
                        <li><a href="#" onclick="salir()" class="priv" id="logout-link">Cerrar Sesión</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Banner principal & efecto kenburn -->
    <div class="banner">
        <section class="kenburns-top" id="hero">
            <div class="titulo-banner slide-in-left">
                <h1 class="text-in content-escritorio">Daf gaming</h1>
                <span class="text-out content-escritorio">¡Donde los mejores productos predominan!</span>
                <div class="button-a">
                    <a href="#servicios" class="nav-link">¡Vamos a ello!</a>
                </div>
            </div>
        </section>
    </div>



 <!-- Contenido para just games -->
 <section class="global-justgames" id="justgames">
        <!-- Imagen que se va a sobreponer sobre el back img -->
        <div class="img-sobreponer"></div>

        <div class="contenedor-just">
            <div class="row">
                <div class="container-information">
                    <h2 class="title-just slide_left">Dead By <span class="color-just">Daylight</span></h2>
                    <p class="text-cont slide_right">Un juego de horror en modo multijugador de 1 vs 4, donde una persona asume el papel del despiadado asesino y las otras cuatro juegan como sobrevivientes que buscan escapar del asesino mientras evitan que los capturen y los asesinen.</p>
                    <!-- Barra gaming -->
                    <div class="img-bar">
                        <img src="img/bar-gaming.png" alt="">
                    </div>
                    <div class="just-gamer-list">
                        <ul>
                            <li>
                                <div class="global-just">
                                <div class="just-gamer-icon">
                                    <img src="img/just-gamer-icon1.png" alt="">
                                </div>
                                <div class="just-gamer-content">
                                    <h5 class="title-gamer-cont">Características</h5>
                                    <p class="text-gamer-cont">Multijugador, Competitivo, Multiplataforma.</p>
                                </div>     
                                </div>
                            </li>
                            <li>
                                <div class="global-just-one">
                            <div class="just-gamer-icon">
                                    <img src="img/just-gamer-icon2.png" alt="">
                                </div>
                                <div class="just-gamer-content">
                                    <h5 class="title-gamer-cont">Géneros</h5>
                                    <p class="text-gamer-cont">Acción, Supervivencia.</p>
                                </div>                                    
                                </div>
                            </li>
                            <li>
                                <div class="global-just-two">
                            <div class="just-gamer-icon">
                                    <img src="img/just-gamer-icon3.png" alt="">
                                </div>
                                <div class="just-gamer-content">
                                    <h5 class="title-gamer-cont">Plataformas</h5>
                                    <p class="text-gamer-cont">PlayStation 4, PlayStation 5, Nintendo Switch, iOS, Microsoft, Windows, Cloud Gaming, Android.</p>
                                </div>                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contenedor-img">
                    <img src="img/plaga.png" alt="" class="character-pubg">
                    <div class="justgames-circle">
                        <img src="img/gamers_circle_line.png" alt="" class="line-circle">
                        <img src="img/img-rotate.png" alt="" class="circle-animate">
                    </div>
                    <img src="img/just-games.png" alt="" class="just-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Slider -->
    <div class="global-slider">
        <div class="container_fixione" id="servicios">
            <!-- div para span con accesos rápidos -->
            <div class="contador ocultar">
                <!-- <div class="button-spanone">
<div class="button-backone">
<p class="text-buttonone">Galería de servicios</p>
</div>
</div> -->
                <!-- Texto de selección de información o servicio -->
                <div class="texto-informationone">
                    <div class="text-infone">
                        <h3 class="text-infone">Nuestro <span class="text-colorone">Slider</span> De Productos
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-slider contador ocultar">
            <div class="slider__one" id="slider">
                <div class="slider__section">
                    <img src="img/back-one.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-two.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-three.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-four.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-five.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-six.png" alt="" class="slider__img">
                </div>
                <div class="slider__section">
                    <img src="img/back-seven.png" alt="" class="slider__img">
                </div>
            </div>
            <!-- Botones para slider -->
            <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
            <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
        </div>
    </div>


    <!-- FOOTER -->
    <div class="footer-ext">
        <p>Copyright &copy; 2023 <span class="newcolor-footer"> Daf Gaming</span> All Rights Reserved.</p>
    </div>

    <script src="js/loader.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/cerrar.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/easing.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>