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
  <title>Créditos</title>
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
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Imprime el header de la pagina -->
<?php
	include_once('include/header.php');
?>
<!-- Fin de Header -->

<div class="row" style="text-align:center;" >
	<h4>Coordinación</h4>
<p>
Seppe De Vreesse Pieters <br />
Judith Adriana Díaz Rivera <br />
Juventino Ávila Ramos <br />
</p>

<h4>Diseño instruccional</h4>
<p>
Areli Flores Martínez<br />
Jocelin Venegas Martínez<br />
Yadira Yannet Jiménez Taboada<br />
Jazmín Acevedo Santiago<br />
Seppe De Vreesse Pieters<br />
</p>


<h4>Diseño gráfico</h4>
<p>
Rocío Angélica Hernández Rodríguez<br />
Karla Gabriela Moreno Vega<br />
Alejandra Salazar Figueroa<br />
Lyssette Calapiz Estrella<br />
Jesús Rodrigo Aizpuru Parra<br />
Álvaro Buitrón Rocha<br />
</p>

<h4>Programación</h4>
<p>
Jonathan Bailon Segura <br />
Darío Eduardo Rodríguez Palacios<br />
Ariadna del Carmen Tapia Miranda<br />
Clemente Eraím Ruiz Sánchez<br />
</p>

<h4>Desarrollo contenidos</h4>
<p>
Ana María Sosa Reyes<br />
Areli Flores Martínez<br />
Jocelin Venegas Martínez<br />
Yadira Yannet Jiménez Taboada<br />
Judith Adriana Díaz Rivera<br />
Seppe De Vreesse Pieters<br />
Jazmín Acevedo Santiago<br />
Claudia Durán Olmos<br />
Rubicelda Lira Pérez<br />
Lidia Lilia Guzmán Marín<br />
María de los Ángeles Bautista Zamudio<br />
David Méndez García<br />
Alejandra Rivera Ferreiro<br />
</p>
</div>



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
