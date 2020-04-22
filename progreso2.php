<section id="main-slider" class="no-margin">
        <?php 
            $archivo = "visitas.txt";
            $descarga = "descargas.txt";
            $openn = fopen($archivo,"r");
            $openb = fopen($descarga,"r");
            $totalvisitas = fread($openn,filesize($archivo));
            $numero = fread($openb,filesize($descarga));
            fclose($openn);
            fclose($openb);
            $openn = fopen($archivo,"w");
            $totalvisitas = $totalvisitas+1;
            $grabar = fwrite($openn,$totalvisitas);
            fclose($openn);
            echo "<div backgroundColor = 'lightblue'>";
            echo "<font size='5'> El numero de visitas hasta hoy: ".$totalvisitas."</font>";
            echo "<br>";
            echo "<font size='5'> El numero de descargas de la app: ".$numero."</font>";
            echo "</div>";
        ?>
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/2.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Crece y Únete Ya!!!</h1>
                                    <h2 class="animation animated-item-2">En nuestra comunidad con tu ayuda juntos mejoraremos   </h2>
                                    <h2 class="animation animated-item-3">No lo pienses más te estamos esperando. </h2>                                                        
                                </div>
                            </div>

           
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/1.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Aquí encontrarás los mejores productos y servicios.</h1>
                                    <h2 class="animation animated-item-2">De la mano de mejores porfesionales del país.</h2>
                                    </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/3.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Con excelentes resultados.</h1>
                                    <h2 class="animation animated-item-2">En todos los campos de acción.</h2>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->