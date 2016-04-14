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
<title>Inicio</title>
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
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Imprime el header de --> 
<!-- Imprime el header de la pagina -->
<header>
  <div class="row"> <img src="/img/encabezado.png" /> </div>
  <nav class="navbar" id="navbar-main-nav">
    <div class="row"> <a href="#" gumby-trigger="#navbar-main-nav #main-nav" class="toggle"></a>
      <nav class="eleven pull_left bloques"> 
        <!-- <ul id="main-nav">
          <li id="m1" class="diseno"><a href="/bloque1"><span>Bloque 1 </span></a>
           <div class="dropdown">
              <ul>
                <li><a href="/features">The Grid</a></li>
                <li><a href="/features/prototype">Rapid Prototyping</a></li>
                <li><a href="/features/sass">Sass</a></li>
                <li><a href="/features/mobile">Mobile</a></li>
                <li><a href="/showcase">Showcase</a></li>
              </ul>
            </div>
          </li>
          <li id="m2" class="diseno"><a href="/bloque2"><span>Bloque 2</span></a>
            <div class="dropdown">
              <ul>
                <li><a href="/docs/">Getting Started</a></li>
                <li><a href="/docs/grid/">The Grid</a></li>
                <li><a href="/docs/ui-kit/">UI Kit</a></li>
                <li><a href="/docs/sass/">Sass</a></li>
                <li><a href="/docs/javascript/">JavaScript</a></li>
                <li><a href="/demo">Demo</a></li>
              </ul>
            </div>
          </li>
          <li id="m3" class="diseno"><a href="/bloque3"><span>Bloque 3 </span></a></li>
          <li id="m4" class="diseno"><a href="/bloque4"><span>Bloque 4 </span></a></li>
          <li id="m5" class="diseno"><a href="/cuestionario"><span>Opinión</span></a></li>
		  		  
        </ul>--> 
      </nav>
      <nav class="three pull_right inicio">
        <ul id="main-nav">
          <li><a href="https://www.facebook.com/ColegioDeCienciasyHumanidades" id="facebook" title="Facebook"><i class="icon-facebook" title="Facebook"></i></a></li>
          <li><a href="https://twitter.com/cchunam" id="twitter" title="Twitter"><i class="icon-twitter" title="Twitter"></i></a></li>
          
        </ul>
      </nav>
    </div>
  </nav>
</header>
<div id="contenido" class="row">
  <section> 
    
    <!-- Fin de Header -->
    
    <?php   	if(isset($mensaje)){
				echo "<div align='center'>";
				echo $mensaje;
				echo "</div>";
			}
			?>
    <div class="row">
      <div class="six columns"> <img src="img/index.png" style="margin-top: 10%;"/>
        <div class="instlog">
          <p><strong>Instrucciones:</strong></p>
          <p>• Ingresa con tu número de cuenta y fecha de nacimiento. Revisa detenidamente los contenidos de cada uno de los cuatro bloques y realiza todas las actividades (<strong>ejercicios</strong> y <strong>cuestionarios</strong>) correspondientes.</p>
          <p>• Resuelve el tutorial a tu propio ritmo, a la hora que tú quieras, en varias sesiones de internet (se estima que necesitas dedicarle 10 horas).</p>
          <p>• No olvides <strong>cerrar tu sesión</strong> siempre que vayas a salir del tutorial (Icono<i class="icon-cancel-circled" style="font-size: 20px;"  title="Cerrar sesión"></i>en la parte superior derecha).</p>
            
           <p>• Al finalizar emite tu opinión. </p>
           <p style="font-size: 11px; text-align:center;">*<em>Si tienes problemas con el acceso escribe a</em> <strong>soportec@cch.unam.mx</strong> </p>
          <p style="color:#573B66; font-family:oregano; font-size: 28px; text-align:center; line-height: 1.25em;">¡Que aprendas mucho!</p>
        </div>
      </div>
      <div class="six columns">
        <div id="cajalogin">          
          <form id="form1" name="form1" action="acceso.php" method="post">            
            <div class="medium default btn" style="margin: -5px 5px 0 0;">
              <input name="login" type="submit" value="Ingresar" />
            </div>
          </form>
          <div id="prof"></div>
          <form id="profesor" action="accesop.php" method="post">
            <p style="margin:0 0 0 48px;">RFC:</p>
            <li style="list-style:none" class="field">
              <input class="password input" type="password" name="rfc" placeholder="RFC con homoclave" />
            </li>
            <div class="medium default btn" style="margin: -5px 5px 0 0;">
              <input type="submit" value="Ingresar" />
            </div>
          </form>
        </div>
        <div id="cajaintro">
          <p>La UNAM como sabes, tiene dos escuelas nacionales que imparten educación a nivel medio superior: la Escuela Nacional Preparatoria y el Colegio de Ciencias y Humanidades.</p>
          <p>A ti te tocó la fortuna de estar inscrito en uno de los cinco planteles del CCH. A manera de bienvenida hemos elaborado este <strong>tutorial de estrategias de aprendizaje</strong>, con el fin de que puedas <strong>aprender a aprender</strong> mejor a lo largo de tu trayectoria en el Colegio. Esto es importante porque en el CCH se dice:</p>
          <p style="color:#FF5100; font-family:oregano; font-size: 25px; text-align:center; line-height: 1.25em;">“El que pasa primero, llega pronto a tercero y de sexto sale entero”</p>
          <p>Con esto los cecehacheros expresamos que quienes acreditan las asignaturas del primer semestre lo logran también en el tercero y aumentan así sus posibilidades de egresar con los conocimientos y habilidades necesarias en tres años.</p>
          <p>En este tutorial revisarás los siguientes contenidos:</p>
          <ol>
            <li><strong>Bloque 2:</strong> Aprender a aprender</li>
            
          </ol>
          <p>Ofrece información acerca de la institución, actividades de autorreflexión sobre el proceso de aprender y herramientas útiles para que inicies con éxito este nuevo ciclo escolar.</p>
        </div>
      </div>
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
  <script src="js/libs/gumby.init.js"></script> --> 

<script src="js/libs/gumby.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/main.js"></script> 
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
<script src="js/jquery.ui.datepicker-es.js"></script> 
<script type="text/javascript">
$(function() {

  $('#form1').validation({
        required: [{
          name: 'cuenta'
        },{
          name: 'fnac'
        }]
  });

  $('#profesor').validation({
    required: [{
      name: 'rfc'
    }]
  });

  $( "#fnac" ).datepicker({
  	minDate:new Date(1985, 1 - 1, 1),
  	maxDate: new Date(2000, 12 - 1, 31),
  	changeMonth: true,
  	changeYear: true,
  	dateFormat: "dd/mm/yy",
  });
  //$( "#fnac" ).datepicker( $.datepicker.regional[ "es" ] );
});
</script> 

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
