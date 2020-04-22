<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BeHappy</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="images/beh.jpeg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/beh.jpeg" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <!--<li><a href="about-us.php">Nosotros</a></li-->
                        <li><a href="app.php">Producto</a></li>
                        <li><a href="servicios.php">Psicologos</a></li>
                        <li><a href="productos.php">Actividades</a></li> 

                          <!--<li><a href="login.html">Login</a></li>-->
                        <?php
                            if ($_SESSION){
                        ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicacion <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">                                
                                    <li><a href="blog.php">Ver</a></li>
                                    <li><a href="publicacionUsuario.php?mensaje=">Crear</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.php">Contáctenos</a></li>
                           <li><a href="login.php?mensaje=">Login</a></li> 
                        <?php
                                if ($_SESSION["perfil"]=="admin"){
                        ?>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">                 
                                <li><a href="indexadministrativo.php"><strong> <?php echo $_SESSION["usu"];?> </strong> </a></li>
                                <li><a href="logout.php">Cerrar Sesión</a></li>
                            </ul>
                            </li>
                        <?php
                                }else{
                        ?>                            
                            
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">                                
                                <li><a title="Bienvenido" ><strong>Bienvenido:  </strong> <?php echo $_SESSION["usu"];?></a></li>
                                <li><a href="logout.php">Cerrar Sesión</a></li>
                            </ul>
                            </li>
                        <?php
                                }
                            }else{
                        ?>
                            <li><a href="blog.php">Publicacion</a></li>
                            
                            <li><a href="contact-us.php">Contáctenos</a></li>
                        <?php
                            }
                        ?>                                               
                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
      <!-- Testimonials -->
  <section class="text-center bg-light">
    <div class="">
      <h2>Be Happy</h2>
        <br>
        <p>¡Llegó una aplicación enfocada en solucionar problemas relacionados con la depresión! Evitar la depresión nunca más será complicado gracias a los servicios que ofrece la app.</p>
    </div>
  </section>
 <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img">
            <img class="img-responsive" src="images/behappy/b1.PNG" alt="">
          </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Paso 1: Regístrate en la aplicación</h2>
          <p class="lead mb-0">Con nuestra aplicacion una solucion a tus problemas de depresion</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Paso 2: Encuentra tu psicólogo</h2>
          <p class="lead mb-0">Una gran disponibilidad y diferentes especialistas a tu dispocision</p>
        </div>
        <div class="col-lg-6 order-lg-2 center text-white showcase-img"><img class="img-responsive" src="images/behappy/b2.PNG" alt=""></div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 center text-white showcase-img"><img class="img-responsive" src="images/behappy/b3.PNG" alt=""></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Paso 3: Verifica información</h2>
          <p class="lead mb-0">Podras revisar tus consultas en tiempo real </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Paso 4: Adaptate a tus necesidades</h2>
          <p class="lead mb-0">Disfruta de tu sesión psicológica en la modalidad que tú prefieras: chat, llamada o videollamada</p>
        </div>
        <div class="col-lg-6 order-lg-2 center text-white showcase-img"><img class="img-responsive" src="images/behappy/b4.PNG" alt=""></div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 center text-white showcase-img"><img class="img-responsive" src="images/behappy/b5.PNG" alt=""></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Paso 5: Califica el servicio ofrecido por el psicólogo</h2>
          <p class="lead mb-0">Podras evaluar el servicio de los diferentes profesionales a su disposicion</p>
        </div>
      </div>
    </div>
  </section>
    <section class="text-center bg-light">
    <div class="">
        <a class="btn btn-primary" href="dowlond.php">Descargar Aqui <i class="fa fa-angle-right"></i></a>
    </div>
  </section>
    
    <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                      <div class="col-sm-6">
                    &copy; 2020 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>. Todos los Derechos Reservados.
                </div>
                   
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
