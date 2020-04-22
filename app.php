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
    <title>Blog </title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/beh.jpeg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

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
                        <li ><a href="index.php">Inicio</a></li>
                        <!--<li><a href="about-us.php">Nosotros</a></li-->
                        <li><a href="app.php">Producto</a></li>
                        <li><a href="servicios.php">Psicologos</a></li>
                        <li><a href="productos.php">Actividades</a></li> 
                        
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>-->
                        <?php
                            if ($_SESSION){
                        ?>
                            <li class="active" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publicacion <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">                                
                                    <li><a href="blog.php">Ver</a></li>
                                    <li><a href="publicacionUsuario.php?mensaje=">Crear</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.php">Contáctenos</a></li>                           
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
                            <li><a href="login.php?mensaje=">Login</a></li>
                        <?php
                            }
                        ?>          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

   <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <img class="img-responsive" src="images/presentacion/expertos.jpg" alt="">
            </div>
            <h3>Aseroria Psicologica</h3>
            <p class="lead mb-0">La aplicación cuenta con una amplia gama de psicólogos a la disposición de solucionar problemas de depresión.</p>
          </div>
        </div>
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <img class="img-responsive" src="images/presentacion/online.jpg" alt="">
            </div>
            <h3>Psychology finder</h3>
            <p class="lead mb-0">Con esta herramienta, buscar psicólogos se presenta de manera rápida y sencilla.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <img class="img-responsive" src="images/presentacion/instante.jpg" alt="">
            </div>
            <h3>Actividades y tratamientos</h3>
            <p class="lead mb-0">Encuentra múltiples opciones de actividades, así como tratamientos que están orientados a distraer su mente para evitar pensamientos depresivos.</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
 <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              
            </div>
            <h3></h3>
            <p class="lead mb-0"></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <img class="img-responsive" src="images/presentacion/contacta.jpg" alt="">
            </div>
            <h3>Comunidad</h3>
            <p class="lead mb-0">Disfruta del contenido que publican los demás usuarios, así como las recomendaciones de los psicólogos en un foro en el que puedes expresarte.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              
            </div>
            <h3></h3>
            <p class="lead mb-0"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  

    <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                      <div class="col-sm-6">
                    &copy; 2020 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>. Todos los derechos reservados
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