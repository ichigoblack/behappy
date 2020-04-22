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
    <title>Servicios</title>
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
                        <span class="sr-only">Toggle navigation</span>
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
                        <li class="active"><a href="productos.php">Actividades</a></li> 
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
                            <li><a href="contact-us.php">Contáctenos</a>
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
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Actividades</h2>
               <p class="lead" ALIGN="justify">Si padeces depresión o ansiedad, muchas veces puede parecer que lo último que quieres hacer es ejercicio. Sin embargo,   cuando logres sentirte motivado, el ejercicio puede marcar una gran diferencia.
                Ejercitarte ayuda a prevenir y mejorar diversos problemas de salud, incluidos la presión arterial alta, la diabetes y la artritis. Las investigaciones sobre depresión, ansiedad y ejercicio han demostrado que los beneficios psicológicos y físicos del ejercicio también pueden mejorar el estado de ánimo y disminuir la ansiedad.</p>
            </div>
        
            
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*" tabindex="-1">Todos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap" tabindex="-1">Recreacion</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html" tabindex="-1">Relajacion</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress" tabindex="-1">Otros</a></li>
                
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Visitar Playas</a></h3>
                                    <p>Ayuda a relajarte y pasarla con amigos</p>
                                    <a class="preview" href="images/actividades/inf1.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act9.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Canotaje</a></h3>
                                    <p>Ayuda a la relajacion y a tener la mente ocupada</p>
                                    <a class="preview" href="images/actividades/inf4.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act10.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Cicloturismo</a></h3>
                                    <p>La interaccion ayuda con el estres</p>
                                    <a class="preview" href="images/actividades/inf2.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver Mas</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Grupo de Ayuda</a></h3>
                                    <p>Ayuda a desahogarse  a entenderse mejor</p>
                                    <a class="preview" href="images/actividades/inf7.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Voleyball</a></h3>
                                    <p>Ayuda a la relajacion y a divertirse</p>
                                    <a class="preview" href="images/actividades/inf3.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act6.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Actividad al aire libre</a></h3>
                                    <p>Mantiene muy distraido y ayuda a la salud</p>
                                    <a class="preview" href="images/actividades/inf8.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act8.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Basquetball</a></h3>
                                    <p>Ayuda al trabajo en equipo</p>
                                    <a class="preview" href="images/actividades/inf6.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/actividades/act7.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Ejercicio</a></h3>
                                    <p>Mantiene la mente y el cuerpo ocupado</p>
                                    <a class="preview" href="images/actividades/inf5.PNG" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver mas</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
   

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
