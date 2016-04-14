<?php
require_once("../logica.php");
$doc=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'], 'bloque'));
$log=new logica();$log->bitacora($doc,"2");/*IMPORTANTE PONER EL MODULO AL QUE PERTENECE*/
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
<title>¿Cómo estudias?</title>
<meta name="description" content="En este tutorial encontrarás una breve descripción del Modelo educativo,  asignaturas y áreas del CCH, así como estrategias de aprendizaje, técnicas de estudio y uso de las TIC que te ayudarán en tu paso por el bachillerato." />
<meta name="keywords" content="UNAM, CCH, Bachillerato, Modelo Educativo, Estrategias de aprendizaje, Técnicas de estudio, Organizadores gráficos, TIC, Educación, Asignaturas CCH, Áreas de conocimiento, Aprender a aprender, Hábitos de estudio, Búsqueda de información, Aprendizaje autónomo, Lectura, Escritura." />
<meta name="author" content="Dirección General del CCH">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

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
<link rel="stylesheet" href="../css/gumby.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/acoordeon.css">
<link rel="stylesheet" href="../css/bloque2.css">
<link rel="stylesheet" href="../css/cuest_bloq2.css">
<link rel="stylesheet" href="../css/acoordeon.css">
<link rel="stylesheet" href="../css/b2_12.css">
<script src="../js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>
<!-- Imprime el header de la pagina -->
<?php
	include_once('../include/header.php');
?>
    <!-- Fin de Header --> 
    
    <!-- Aquí empieza el contenido-->
    
    <div class="topb2"> Aprender a aprender </div>
    
    <h1 class="titulo">&iquest;C&oacute;mo estudias? H&aacute;bitos de estudio</h1>
    <div class="spacerer" style="margin:25px 0 0;">&nbsp;</div>
    <img src="img/b2_12_05.jpg" style="float:right; margin:0 0 0 40px; width:24%;" />
        <p>Seguramente te    has dado cuenta que es posible aprender de manera informal en la calle, en    las redes sociales o estando con tus amigos; y que tambi&eacute;n puedes aprender    formalmente en la escuela o en cualquier otra instituci&oacute;n educativa, el    aprendizaje que ocurre en estos lugares es de tipo acad&eacute;mico, en donde se da el estudio.</p>
        <p>Para  lograr que el proceso de estudio te resulte exitoso es necesario que  desarrolles una serie de t&eacute;cnicas de estudio eficientes acompa&ntilde;adas de ciertos  h&aacute;bitos, los cuales contribuir&aacute;n a mejorar los resultados de aprendizaje  obtenidos</p>
     
     
    <div class="spacerer" style="margin:25px 0 0;">&nbsp;</div>
     <span class="resb2">A continuaci&oacute;n te presentamos algunos de esos h&aacute;bitos:</span>
    <div class="spacerer" style="margin:25px 0 0;">&nbsp;</div>
     
    <div class="colubasmitad" style="width:55%;">    
         <ul class="liston">
          <li><div class="palomito">&nbsp;</div>Planificar previamente el estudio.</li>
          <li><div class="palomito">&nbsp;</div>Disponer de un tiempo y un lugar silencioso y    ordenado.</li>
          <li><div class="palomito">&nbsp;</div>Contar con el material necesario.</li>
          <li><div class="palomito">&nbsp;</div>Pensar tus estrategias de aprendizaje.</li>
          <li><div class="palomito">&nbsp;</div>Utilizar t&eacute;cnicas de estudio: subrayados,    res&uacute;menes, fichas, palabras claves, apuntes, esquemas, mapas conceptuales o    cuadros.</li>
         </ul>
	</div>

    <div class="colubasmitad" style="width:45%;">
         <div class="chacamillas" style="margin:0 0 10px 21px;">
             <p class="resb2">Otro  aspecto fundamental es crear buenas condiciones ambientales, un buen clima de estudio: estudiar sin ruidos,  sentarse en una adecuada posici&oacute;n, sentirse a gusto con la iluminaci&oacute;n y la  temperatura del ambiente, contar con buenas condiciones psicof&iacute;sicas: buenos  h&aacute;bitos de alimentaci&oacute;n y de higiene.</p>
         </div>
   </div>     

<div class="spacerer" style="margin:0 0 25px;">&nbsp;</div>
<p class="cuestionario">Cuestionario</p>   
    <div class="spacerer" style="margin:0 0 -3%;">&nbsp;</div>
<p class="resb1" style="padding:0 0 0 7%;">&iquest;Cu&aacute;les son tus condiciones de estudio?</p>


<div id="mo">
    
    <div id="opc">
    
    	<div><a class="MO" href="#div2"><img src="img/b2_12_01.jpg" class="circu over" /></a> <img src="img/b2_12_03.jpg" class="signo" /> </div> <div><a class="MO" href="#div1"><img src="img/b2_12_02.jpg"  class="circu over" /></a> </div> <div style="width:40%; margin:3% 4% 0; text-align:center; float:left;"><p class="resb2">Da clic en los botones para saber c&oacute;mo influyen el tiempo y el espacio en tus h&aacute;bitos de estudios.</p></div>
	
    </div>

<div class="spacerer">&nbsp;</div>

	<div class="oculto" id="div1">
    <p class="subtitulo">Espacio de estudio</p>
    	<p class="resb2" style="width:70%;">El espacio donde estudias es uno de los    elementos que va a incidir de manera positiva o negativa en la calidad de tu    estudio. Ver&aacute;s que organizar tu    ambiente facilitar&aacute; tu estudio.</p>			
    <img src="img/b2_12_07.jpg" style="float:right; margin:-4% 8% 20px 0;"/>
<div class="spacerer">&nbsp;</div>
		<p>Contesta  el siguiente cuestionario acerca de tu ambiente de estudio:</p>
<div class="spacerer">&nbsp;</div>
    <form action="#" method="post" id="miform">
      <label for="p1" class="radio">&iquest;Tienes un <strong>lugar  fijo</strong> de estudio?</label>
      <div class="respuestas">
        <input type="radio" name="p1" value="Si" />
        Si
        <input type="radio" name="p1" value="No" />
        No </div>
      <label for="p2" class="radio">&iquest;El lugar d&oacute;nde estudias es <strong>c&oacute;modo y </strong> tiene el <strong>m&iacute;nimo de distractores</strong>? </label>
      <div class="respuestas">
        <input type="radio" name="p2" value="Si" />
        Si
        <input type="radio" name="p2" value="No" />
        No </div>
      <label for="p3" class="radio">&iquest;Tu lugar de estudio est&aacute; bien <strong>iluminado</strong>, con una <strong>temperatura</strong> ambiental y una <strong>ventilaci&oacute;n</strong> adecuada?</label>
      <div class="respuestas2">
        <input type="radio" name="p3" value="Si" />
        Si
        <input type="radio" name="p3" value="No" />
        No </div>
      <label for="p4" class="radio">&iquest;Cuentas con un <strong>escritorio</strong> o <strong>una mesa y silla</strong> c&oacute;moda?</label>
      <div class="respuestas">
        <input type="radio" name="p4" value="Si" />
        Si
        <input type="radio" name="p4" value="No" />
        No </div>
      <label for="p5" class="radio">&iquest;Tienes todo el <strong>material de estudio</strong> (&uacute;tiles, diccionarios, libros, revistas,  computadora, etc.) a la mano?</label>
      <div class="respuestas2">
        <input type="radio" name="p5" value="Si" />
        Si
        <input type="radio" name="p5" value="No" />
        No </div>
 <div class="spacerer" style="margin:0 0 15px;">&nbsp;</div>
        <div class="retro"><!--retro de Espacio de estudio-->
        	<p>Uno de los factores importantes son las condiciones f&iacute;sicas de tu lugar de estudio: &eacute;ste debe contar con ciertas caracter&iacute;sticas para que te sea mucho m&aacute;s f&aacute;cil concentrarte y adquirir conocimiento.</p>
            <p>Procura estudiar en el mismo lugar para que logres crearte un h&aacute;bito. Elige uno tranquilo y sin ruidos. De preferencia, uno que sea de luz natural, pero, si es artificial, que sea lo suficientemente potente para que no te cree sombras.</p>
            <p>Es importante tener un escritorio y la mesa con una amplitud y altura c&oacute;moda para trabajar; la silla con respaldo y con la altura necesaria para apoyar la planta de los pies sobre el piso. No se recomienda que estudies o hagas actividades escolares sobre la cama, pues resulta contraproducente. Ten a la mano el material que necesitas, de esta manera, al no necesitar levantarte a buscar algo, evitar&aacute;s perder tiempo y concentraci&oacute;n.</p>
        </div>
        
<div class="spacerer">&nbsp;</div>
          <div class="btnresp">
           <div class="medium default btn">
              <input type="submit" value="Enviar respuestas" />
           </div>
          </div>
    
        </form>
	</div>

	<div class="oculto" id="div2">
    <p class="subtitulo">Tiempo de estudio</p>
    	<p class="resb2" style="width:70%;">La planificaci&oacute;n y organizaci&oacute;n del tiempo constituyen uno de los factores m&aacute;s importantes y determinantes para que tu estudio resulte eficaz.</p>
    <img src="img/b2_12_06.jpg" style="float:right; margin:-4% 8% 20px 0;"/>
<div class="spacerer">&nbsp;</div>

        <p>Esto significa que tendr&aacute;s que adaptar tus tiempos tanto al trabajo que se va a realizar, como a tu personalidad. Si organizas adecuadamente tu tiempo y lo planificas, te ser&aacute; posible distribuir equilibradamente tu jornada diaria y semanal para completar de manera eficaz tu trabajo escolar y dar tiempo a otras actividades que no tengan que ver precisamente con la escuela.</p>			
		<p>Contesta  el siguiente cuestionario acerca de la forma en que organizas tu tiempo de  estudio:</p>
        
<div class="spacerer">&nbsp;</div>

    <form action="#" method="post" id="miform">
      <label for="p1" class="radio">&iquest;Estudias o trabajas siempre a la <strong>misma hora</strong> y <strong>todos los d&iacute;as</strong>?</label>
      <div class="respuestas">
        <input type="radio" name="p1" value="Si" />
        Si
        <input type="radio" name="p1" value="No" />
        No </div>
      <label for="p2" class="radio">&iquest;Programas &nbsp;el estudio de acuerdo con las exigencias y la <strong>dificultad</strong> de cada materia? </label>
      <div class="respuestas">
        <input type="radio" name="p2" value="Si" />
        Si
        <input type="radio" name="p2" value="No" />
        No </div>
      <label for="p3" class="radio">&iquest;Estudias <strong>todos  los d&iacute;as</strong> durante un poco de tiempo, en vez de estudiar mucho tiempo durante  muy pocos d&iacute;as?</label>
      <div class="respuestas2">
        <input type="radio" name="p3" value="Si" />
        Si
        <input type="radio" name="p3" value="No" />
        No </div>
      <label for="p4" class="radio">&iquest;Te pones de <strong>acuerdo con tu familia y los amigos</strong> para que no te interrumpan en  el horario de estudio?</label>
      <div class="respuestas2">
        <input type="radio" name="p4" value="Si" />
        Si
        <input type="radio" name="p4" value="No" />
        No </div>
      <label for="p5" class="radio">&iquest;<strong>Duermes</strong> 8 horas diarias? </label>
      <div class="respuestas">
        <input type="radio" name="p5" value="Si" />
        Si
        <input type="radio" name="p5" value="No" />
        No </div>
      <label for="p6" class="radio">&iquest;Tienes suficiente tiempo para <strong>actividades placenteras</strong>? </label>
      <div class="respuestas">
        <input type="radio" name="p6" value="Si" />
        Si
        <input type="radio" name="p6" value="No" />
        No </div>
        
 <div class="spacerer" style="margin:0 0 15px;">&nbsp;</div>
        <div class="retro"><!--retro de Tiempo de estudio-->
        	<p>Ten presente que el &eacute;xito de la forma en que distribuyas el tiempo va a depender del cuidado con que planifiques dicha distribuci&oacute;n. Debes hacerlo con un esp&iacute;ritu realista y objetivo; no debes planificar horarios ilusorios, que no se puedan cumplir debido al exceso de horas que proyectaste para el estudio, o a un n&uacute;mero muy reducido de ellas.</p>
			<p> Debes planificar tu horario considerando factores como el horario de clases, las necesidades de preparaci&oacute;n de cada asignatura, los periodos de descanso, las horas de comida, de sue&ntilde;o y, adem&aacute;s, identificar cu&aacute;les son tus debilidades, fortalezas, habilidades y destrezas para que as&iacute; logres alcanzar el dominio de tus materias de estudio.</p>       
		</div>        
<div class="spacerer">&nbsp;</div>
          <div class="btnresp">
           <div class="medium default btn">
              <input type="submit" value="Enviar respuestas" />
           </div>
          </div>
    
        </form>
	</div>
    
</div><!-- fin mostrar ocultar-->


<div class="spacerer" style="margin:0 0 25px;">&nbsp;</div>

<div class="bloqueligas">
<p class="subtitulo">Recuerda que&hellip;</p>
<p style="width:95%;"><span class="resb2">No es posible conocer si no  hay deseo de conocer</span>, si  no hay involucramiento con lo que se aprende. No es tan importante tener  h&aacute;bitos de estudio como tener gusto por el estudio, tener placer, generar  placer, construir placer.</p>
</div>

<div class="spacerer" style="margin:0 0 25px;">&nbsp;</div>

<!-- Navegacion --> 
        
    <div class="naveg">
      <div class="ant"> <a href="../bloque2/organizadoresGraficos">anterior</a></div>
      <div class="sig"> <a href="../bloque3">siguiente</a> </div>
    </div>
    
<!-- Fin navegacion --> 
    
           <!-- Fin contenido --> 
    
        <!-- Imprime el footer de la pagina -->
    <?php
include_once('../include/footer.php');
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
      document.write('<script src="../js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="../js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script> 

<!--
  Include gumby.js followed by UI modules.
  Or concatenate and minify into a single file
  <script src="../js/libs/gumby.js"></script>
  <script src="../js/libs/ui/gumby.retina.js"></script>
  <script src="../js/libs/ui/gumby.fixed.js"></script>
  <script src="../js/libs/ui/gumby.skiplink.js"></script>
  <script src="../js/libs/ui/gumby.toggleswitch.js"></script>
  <script src="../js/libs/ui/gumby.checkbox.js"></script>
  <script src="../js/libs/ui/gumby.radiobtn.js"></script>
  <script src="../js/libs/ui/gumby.tabs.js"></script>
  <script src="../js/libs/ui/gumby.navbar.js"></script>
  <script src="../js/libs/ui/gumby.fittext.js"></script>
  <script src="../js/libs/ui/jquery.validation.js"></script>
  <script src="../js/libs/gumby.init.js"></script>--> 

<script src="../js/libs/gumby.min.js"></script> 
<script src="../js/plugins.js"></script> 
<script src="../js/main.js"></script> 
<script src="../js/jquery.easing.1.3.js"></script> 
<script src="../js/jquery.accordion.js"></script> 
<script src="../js/accordion.js"></script> 
<script src="../js/mostrarOcultar.js"></script>
<script type="text/javascript">
  jQuery(function() {
    jQuery('.fancypantsaccordionholder').accordion({
      oneOpenedItem:true,
      speed:300,
      scrollSpeed:300,
      open:0
    });
	
	$("#mo").mostrarocultar({active: -1,elemento: "div"});
  });
</script> 

<!-- Inserta google Analytics -->
<?php
  include_once('../include/googleanalytics.php');
?>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
     chromium.org/developers/how-tos/chrome-frame-getting-started --> 
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>