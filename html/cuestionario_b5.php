<?php
require_once("logica.php");
$doc=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], 'bloque'));
$log=new logica();$log->bitacora($doc,"5");/*IMPORTANTE PONER EL MODULO AL QUE PERTENECE*/

$conexion=new conexion();
$conexion->conectar();
$sistema=new logica();
$numcta=$sistema->getAlumno();
$tipoUsuario=$sistema->getTipoUsuario();
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
         More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Cuestionario de opinión</title>
  <meta name="description" content="En este tutorial encontrarás una breve descripción del Modelo educativo,  asignaturas y áreas del CCH, así como estrategias de aprendizaje, técnicas de estudio y uso de las TIC que te ayudarán en tu paso por el bachillerato." />
  <meta name="keywords" content="UNAM, CCH, Bachillerato, Modelo Educativo, Estrategias de aprendizaje, Técnicas de estudio, Organizadores gráficos, TIC, Educación, Asignaturas CCH, Áreas de conocimiento, Aprender a aprender, Hábitos de estudio, Búsqueda de información, Aprendizaje autónomo, Lectura, Escritura." />
  <meta name="author" content="Dirección General del CCH">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="og:image" content="http://tutorial.cch.unam.mx/img/social.jpg" />
  <meta property="og:description" content="En este tutorial encontrarás una breve descripción del Modelo educativo,  asignaturas y áreas del CCH, así como estrategias de aprendizaje, técnicas de estudio y uso de las TIC que te ayudarán en tu paso por el bachillerato."/>
  <meta property="og:title" content="Tutorial Estrategias de Aprendizaje"/>
  <meta property="og:site_name" content="Estrategias de Aprendizaje">

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="Tutorial Estrategias de Aprendizaje">
  <meta itemprop="description" content="En este tutorial encontrarás una breve descripción del Modelo educativo,  asignaturas y áreas del CCH, así como estrategias de aprendizaje, técnicas de estudio y uso de las TIC que te ayudarán en tu paso por el bachillerato.">
  <meta itemprop="image" content="http://tutorial.cch.unam.mx/img/social.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:image" content="http://tutorial.cch.unam.mx/img/social.jpg">
  <meta name="twitter:site" content="@CCHUNAM">
  <meta name="twitter:creator" content="@CCHUNAM">


  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
         However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="css/gumby.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cuest_bloq5.css">
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Imprime el header de la pagina -->
<?php
  include_once('include/header.php');
?>
<!-- Fin de Header -->

<p class="cuestionario" style="margin: 20px;"> Cuestionario de opinión</p>

<div class="imagenb5">
<img class="imag_cont" src="img/b5_01_05.jpg" />
</div>

<div class="info"> 
<p>Tu opinión sobre el contenido del Tutorial de Estrategias de Aprendizaje del CCH es de particular interés para la institución, con el objetivo de continuar mejorándolo en las próximas versiones. La encuesta es anónima y los datos obtenidos serán procesados por la Secretaría de Informática de la Dirección General del CCH.</p> 
<?php

$p1=0; $p2=0; $p3=0; $p4=0; $p5=0; $p6=0; $p7=0; $p8=0; $p9=0; $p10=0; $p11=0; $p12=0; $p13=0; 
$enviadas=0;
$mensaje_error="";
if(isset($_POST["enviar1"])){
		for($cont=1;$cont<=13;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==13){
			$sql_guardar="INSERT INTO cuestionario_b5( id_alumno, tipo_usuario, fecha_hora, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13) VALUES( '$numcta', $tipoUsuario, NOW(), $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13);";
			//echo $sql_guardar;
			$conexion->ejecutar($sql_guardar);
		}
}

$sql_revisar="SELECT COUNT(cuestionario_b5.id_cuestionario_b5) as 'respuestas' FROM cuestionario_b5 WHERE cuestionario_b5.id_alumno='$numcta' LIMIT 1;"; 
$respuestas=$conexion->getdb($sql_revisar,"respuestas");/*Reviso si ya ha contestado antes */


if($respuestas>=1){ 
?> <p style="font-family:oregano, Arial, Helvetica, sans-serif;; color:#FF5100; font-size:22px; text-align:center;">¡Gracias por compartir tu opinión!</p><?php
}



if($respuestas<1){
?>
<p style="font-family:oregano, Arial, Helvetica, sans-serif;; color:#FF5100; font-size:22px; text-align:center;">¡Te solicitamos que respondas de la manera más objetiva posible!</p>

<p style="font-family:oregano, Arial, Helvetica, sans-serif;; color:#69A300; font-size:20px;">Primera Parte</p>


<p><span style="color:#69A300; font-weight:bold;">Instrucción:</span> Lee atentamente los enunciados y selecciona la casilla considerando la siguiente <u><strong>clave de respuesta</strong></u>:
1- nada; 2- poco; 3-regular; 4-bastante; 5- mucho</p>
</div>
<div class="spacerer" style="margin:0 0 15px 0;">&nbsp;</div>  
 
<?php
/* mensajes de error*/
if(strlen($mensaje_error)>20){	?><center><br /><font color='#FF000'><?php echo $mensaje_error; ?></font></center><?php	}
?>
    
    <form action="" method="post" id="opinion">
      <label for="p1" class="radio">1. El tutorial me permitió conocer mejor al CCH</label>
      <div class="respuestas">
        <input type="radio" name="p1" value="1" <?php if($p1==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p1" value="2" <?php if($p1==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p1" value="3" <?php if($p1==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p1" value="4" <?php if($p1==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p1" value="5" <?php if($p1==5){ echo 'checked="checked"';  } ?> />
        5 </div>
      <label for="p2" class="radio">2. Entiendo las características del Modelo Educativo del Colegio</label>
      <div class="respuestas">
        <input type="radio" name="p2" value="1" <?php if($p2==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p2" value="2" <?php if($p2==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p2" value="3" <?php if($p2==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p2" value="4" <?php if($p2==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p2" value="5" <?php if($p2==5){ echo 'checked="checked"';  } ?> />
        5 </div>
      <label for="p3" class="radio">3. Conozco mi estilo personal de aprendizaje</label>
      <div class="respuestas">
        <input type="radio" name="p3" value="1" <?php if($p3==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p3" value="2" <?php if($p3==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p3" value="3" <?php if($p3==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p3" value="4" <?php if($p3==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p3" value="5" <?php if($p3==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p4" class="radio">4. El tutorial me hizo reflexionar sobre mis estrategias de aprendizaje</label>
      <div class="respuestas">
        <input type="radio" name="p4" value="1" <?php if($p4==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p4" value="2" <?php if($p4==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p4" value="3" <?php if($p4==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p4" value="4" <?php if($p4==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p4" value="5" <?php if($p4==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p5" class="radio">5. Aprendí a realizar búsquedas en las bibliotecas del CCH</label>
      <div class="respuestas">
        <input type="radio" name="p5" value="1" <?php if($p5==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p5" value="2" <?php if($p5==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p5" value="3" <?php if($p5==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p5" value="4" <?php if($p5==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p5" value="5" <?php if($p5==5){ echo 'checked="checked"';  } ?> />
        5 </div>
      <label for="p6" class="radio">6. El tutorial me ofreció herramientas para fortalecer mis técnicas y hábitos de estudio</label>
      <div class="respuestas">
        <input type="radio" name="p6" value="1" <?php if($p6==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p6" value="2" <?php if($p6==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p6" value="3" <?php if($p6==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p6" value="4" <?php if($p6==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p6" value="5" <?php if($p6==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p7" class="radio">7. Los recursos en línea (enlaces) por área de conocimiento me permitirán armar estrategias de aprendizaje</label>
      <div class="respuestasc">
        <input type="radio" name="p7" value="1" <?php if($p7==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p7" value="2" <?php if($p7==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p7" value="3" <?php if($p7==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p7" value="4" <?php if($p7==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p7" value="5" <?php if($p7==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p8" class="radio">8.  Conocí aplicaciones tecnológicas (TIC) que facilitarán mi aprendizaje</label>
      <div class="respuestas">
        <input type="radio" name="p8" value="1" <?php if($p8==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p8" value="2" <?php if($p8==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p8" value="3"  <?php if($p8==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p8" value="4" <?php if($p8==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p8" value="5" <?php if($p8==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p9" class="radio">9.  Son útiles los servicios tecnológicos (internet, descarga de software, etc.) de la UNAM</label>
      <div class="respuestas">
        <input type="radio" name="p9" value="1" <?php if($p9==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p9" value="2" <?php if($p9==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p9" value="3" <?php if($p9==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p9" value="4" <?php if($p9==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p9" value="5" <?php if($p9==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p10" class="radio">10. Los contenidos temáticos del tutorial son relevantes</label>
      <div class="respuestas">
        <input type="radio" name="p10" value="1" <?php if($p10==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p10" value="2" <?php if($p10==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p10" value="3" <?php if($p10==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p10" value="4" <?php if($p10==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p10" value="5" <?php if($p10==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p11" class="radio">11. El diseño gráfico del tutorial es agradable y facilita su uso</label>
      <div class="respuestas">
        <input type="radio" name="p11" value="1" <?php if($p11==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p11" value="2" <?php if($p11==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p11" value="3" <?php if($p11==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p11" value="4" <?php if($p11==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p11" value="5" <?php if($p11==5){ echo 'checked="checked"';  } ?> />
        5</div>
      <label for="p12" class="radio">12. Recomiendo el tutorial</label>
      <div class="respuestas">
        <input type="radio" name="p12" value="1" <?php if($p12==1){ echo 'checked="checked"';  } ?> />
        1
        <input type="radio" name="p12" value="2" <?php if($p12==2){ echo 'checked="checked"';  } ?> />
        2
        <input type="radio" name="p12" value="3" <?php if($p12==3){ echo 'checked="checked"';  } ?> />
        3
        <input type="radio" name="p12" value="4" <?php if($p12==4){ echo 'checked="checked"';  } ?> />
        4
        <input type="radio" name="p12" value="5" <?php if($p12==5){ echo 'checked="checked"';  } ?> />
        5</div>
		
				
        
    
<div class="spacerer" style="margin:0 0 15px 0;">&nbsp;</div>    

<p style="font-family:oregano, Arial, Helvetica, sans-serif;; color:#69A300; font-size:20px;">Segunda Parte</p>

<div id="bloques">      
      <label for="p14" class="radio">Señala el bloque que más te gustó del Tutorial:</label>
      <div class="respuestasb">
        <input type="radio" name="p13" value="1" <?php if($p13==1){ echo 'checked="checked"';  } ?> />
        <img style= "width: 80px; height: 37px; " src="img/b5_01_01.png"> 
        <input type="radio" name="p13" value="2" <?php if($p13==2){ echo 'checked="checked"';  } ?> />
        <img style= "width: 80px; height: 37px; " src="img/b5_01_02.png"> 
        <input type="radio" name="p13" value="3" <?php if($p13==3){ echo 'checked="checked"';  } ?> />
        <img style= "width: 80px; height: 37px; " src="img/b5_01_03.png"> 
        <input type="radio" name="p13" value="4" <?php if($p13==4){ echo 'checked="checked"';  } ?> />
        <img style= "width: 80px; height: 37px; " src="img/b5_01_04.png">        
        </div>
        <div id="envio"><div id="enviar" class="pretty medium default btn"><input name="enviar1" type="submit" value="Enviar respuestas" /></div></div>
 </div>
 </form>
<div class="spacerer" style="margin:0 0 15px 0;">&nbsp;</div>    
<?php } ?>
 <!-- Imprime el footer de la pagina -->
<?php
include_once('include/footer.php');
?>
<!-- Fin footer -->

<!-- Grab Google CDN's jQuery, fall back to local if offline --> 
<!-- 2.0 for modern browsers, 1.10 for .oldie --> 
<script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script> 
<script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script> 

<!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="js/libs/gumby.js"></script>
  <script src="js/libs/ui/gumby.retina.js"></script>
  <script src="js/libs/ui/gumby.fixed.js"></script>
  <script src="js/libs/ui/gumby.skiplink.js"></script>
  <script src="js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="js/libs/ui/gumby.checkbox.js"></script>
  <script src="js/libs/ui/gumby.radiobtn.js"></script>
  <script src="js/libs/ui/gumby.tabs.js"></script>
  <script src="js/libs/ui/gumby.navbar.js"></script>
  <script src="js/libs/ui/gumby.fittext.js"></script>
  <script src="js/libs/ui/jquery.validation.js"></script>
  <script src="js/libs/gumby.init.js"></script>--> 

<script src="js/libs/gumby.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/main.js"></script> 

<!-- Inserta google Analytics -->
<?php
  include_once('include/googleanalytics.php');
?>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started --> 
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
<?php $conexion->desconectar(); ?>