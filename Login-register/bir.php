<?php 

    session_start();


    if (!isset($_SESSION['usuario'])) {
        echo '
        <script>
                alert("Debes iniciar sesión.");
                window.location = "bir.php";
            </script>
        ';
        
        session_destroy();
        die();
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIR</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/blog.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>


    <!--Header - menu-->
    <header>

        <div class="header-content">

            <div class="logo">
                <h1>B<b>I</b>R</h1>
            </div>

            <div class="menu" id="show-menu">

                <nav>
                    <ul>
                        <li><a href="index.php"> <i class="menu-selected"></i> Inicio</a></li>
                        <li><a href="index.php#contenido3"> <i class="menu-selected"></i> Quienes somos</a></li>
                        <li><a href="Formulario/index.html"> <i class="fas fa-headset"></i> Contacto</a></li>
                        <li><a href="php/cerrar_sesion.php"> <i class="fas fa-headset"></i>Cerrar Sesión</a></li> 
                    </ul>
                </nav>

            </div>

            <div id="ctn-icon-search">
                <i class="fas fa-search" id="icon-search"></i>
            </div>

        </div>

        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>


    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>

    <ul id="box-search">

        
        <li><a href="#"><i class="fas fa-search">Diseñador Gráfico</i></a></li>
        <li><a href="#"><i class="fas fa-search">Ilustrador</i></a></li>
        <li><a href="#"><i class="fas fa-search">Animación / Diseño 3D</i></a></li>
        <li><a href="#"><i class="fas fa-search">Asistente Virtual</i></a></li>
        <li><a href="#"><i class="fas fa-search">Servicio al cliente</i></a></li>
        <li><a href="#"><i class="fas fa-search">vendedores</i></a></li>
        <li><a href="#"><i class="fas fa-search">Fotógrafo</i></a></li>
        <li><a href="#"><i class="fas fa-search">Contador</i></a></li>
        <li><a href="#"><i class="fas fa-search">Analista Finansiero</i></a></li>
        <li><a href="#"><i class="fas fa-search">Topógrafo</i></a></li>
        <li><a href="#"><i class="fas fa-search">Doblaje Profesional</i></a></li>
        <li><a href="#"><i class="fas fa-search">Traductor</i></a></li>
        <li><a href="#"><i class="fas fa-search">Programador</i></a></li>
        <li><a href="#"><i class="fas fa-search">Desarrolador de videojuegos</i></a></li>
        
    </ul>

    <div id="cover-ctn-search"></div>


    <!--Portada-->

    <div class="container-all" id="move-content">

    
    <div class="blog-container-cover">
        <div class="container-info-cover">
            <h1>¡Encuentra tu empleo de interes!</h1>
            <p>LA PROGRAMACION EN BUSQUEDA DE NUEVOS HORIZONTES LABORALES....</p>
        </div>
    </div>
<br><br>

        <center><h2> <a name="contenido3"></a>Quienes somos</h2></center>
        <br>

    <center><p nema>BIR S.A busca el beneficio laboral de personas las cuales se encuentran desempleadas a fin de lograr llevar una buena estabilidad en el campo laboral. Buscamos que diferentes empleadores de varios ambitos 
        logren emplear a lar personas adecuadas mas facil y ahorrando un menor tiempo, buscamos dar una estabilidad economica a los empleados dandoles vacantes acordes a su necesidad y sus capacidades. <br><br> Esperamos impactar el mercado gracias a un mejor cubrimiento de la demanda en base de brindar un beneficio mutuo de empleador a empleado, logrando dar una mejor calidad a la hora de emplear un individuo acorde con los requisitos y dando mejores opciones para los empleadores.</p></center>
    

    <div class="container-footer">	

        <footer>
            <div class="logo-footer">
                <img src="img/logo.png" alt="">
            </div>

            <div class="redes-footer">
                <a href="https://www.facebook.com/Bir-SA-101541681706755/?modal=admin_todo_tour"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="https://twitter.com/BIRSA22660942"><i class="fab fa-twitter icon-redes-footer"></i></a>
                <a href="https://www.instagram.com/birsacompany/"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>

            <hr>
            <h4> (c) Todos los derechos reservados - proyecto BIR 2020   <br>
                Diseñado por <a>grupo BIR</a>
                <br><br>
                Asesora Graciela Arias
                <br></h4>

        </footer>

    </div>

</div>

    <script src="js/script.js"></script>
</body>
</html>