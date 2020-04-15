<?php 
            $url_descarga = "app/BeHappy.apk";
            $archivo = "descargas.txt";
            $openn = fopen($archivo,"r");
            $totalvisitas = fread($openn,filesize($archivo));
            fclose($openn);
            $openn = fopen($archivo,"w");
            $totalvisitas = $totalvisitas+1;
            $grabar = fwrite($openn,$totalvisitas);
            fclose($openn);
            //echo "<font size='5'> Visitas hasta hoy: ".$totalvisitas."</font>";
            //echo "<a href='app/app-debug.apk' download='BeHappy'></a>";
            header("location:$url_descarga");
?>