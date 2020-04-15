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
                        <li><a href="about-us.php">Nosotros</a></li>
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
                            <li><a href="login.php?mensaje=">Inicio de Sesión</a></li>
                        <?php
                            }
                        ?>          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="blog" class="container">
        <div class="center">
            <h2>Aplicacion BeHappy</h2>
            <p class="lead"></p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href=""><img class="img-responsive img-blog" src="images/app.PNG" width="100%" alt="" /></a>
                                <h2><a href="blog-item.php"></a></h2>
                                <h3>Ayudamos a resolver problemas de depresión con actividades que ayuden a subir su motivación y autoestima del usuario.Servicio gratuito con asesoría de profesionales, además de contar con una comunidad que se encargará de ofrecer consejos. </h3>
                                <a class="btn btn-primary" href="app/app-debug.apk" download="BeHappy">Descargar Aqui <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->                                          
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
        
    </section><!--/#blog-->

  

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