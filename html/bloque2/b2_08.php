
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
<title>Ejercicio 2</title>
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
<link rel="stylesheet" href="../css/bloque2.css">
<link rel="stylesheet" href="../css/cuest_bloq2.css">
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
    <div class="aire"> &nbsp; <br>
      <br>
    </div>
    <h1 class="titulo">La búsqueda de información en el internet.</h1>
    <div class="spacerer">
      <p>&nbsp;&nbsp;</p>
      <br>
      <br>
    </div>
    <div class="col5">
      <div class="resalte">
        <p class="resb2chi">La búsqueda de información es una de las principales habilidades de aprender a aprender. </p>
        <p class="resb2chi">Para aprender a evaluar los sitios en internet realiza las siguientes actividades:</p>
      </div>
    </div>
    <div class="col6">
      <center>
        <img class="imag_cont" src="img/b2_08_02.jpg" />
      </center>
      <p >&nbsp;</p>
    </div>
    <div class="spacerer" style="margin-top:150px"> </div>
    <!--Inicia tabs-->
<a name="f1"></a>   
   <div class="tabs">
      <ul class="tab-nav">
		<li class="<?php if(isset($tab_activa)){}else{echo "active";} ?>"><a href="#"><span class="resb2">Internet</span></a></li>        
      </ul>	  
      <!-- Inicia Tabs 3-->
      <div class="tab-content <?php $tab_activa=1; if(isset($tab_activa)){if($tab_activa=="1"){ echo "active";}} ?>">
        <p class="resb2"> Búsqueda: evalúa la calidad de cuatro sitios de internet.</p>
        <div class="row">
          <div class="col5">
            <p class="subtitulo">Propósito:</p>
            <p class="prop"> Con la siguiente actividad reconocerás la calidad (actualidad, confiabilidad, veracidad) de algunas páginas web para aprender a hacer una búsqueda de información más óptima. </p>
            <p><img  src="img/ic_01.png" align="absmiddle" /> Consulta los siguientes cuatro sitios de internet con el tema de la <strong>biodiversidad</strong> dando clic en las imágenes.</p>
            <p> <img  src="img/ic_02.png" align="absmiddle" /> Evalúa la información que cada sitio te proporcionó seleccionando en los apartados de abajo. Envía tu evaluación.</p>
            </p>
            <a href="http://www.biodiversidad.gob.mx/" target="_blank"><img class="over" style="margin-right:5px" src="img/biodiversidadcom.jpg"/></a> <a href="http://www.monografias.com/trabajos11/bioltrece/bioltrece.shtml" target="_blank"><img class="over" style="margin-right:5px" src="img/monografiascom.jpg"/></a> <a href="http://www.revistaciencias.unam.mx/index.php?option=com_content&view=article&id=843%3Ala-biodiversidad-en-mexico-su-conservacion-y-las-colecciones-biologicas" target="_blank"><img class="over" style="margin-right:5px" src="img/revcienciascom.jpg"/></a> <a href="https://es.wikipedia.org/wiki/Biodiversidad" target="_blank"><img class="over" style="margin-right:5px" src="img/wikipediacom.jpg"/></a> </div>
          <div class="col6"> <img class="imag_cont" style="margin-top:53px" src="img/b2_08_04.jpg" align="absmiddle" /> </div>
        </div>
       
		<div class="row">
        <?php
		$respuestas31=$_GET['p31'];
		 if($respuestas31<1){ 
		?> 
			<form class="field ficha3" action="b2_08.php" method="get" >
            <div class="row">
              <div class="imglig"><a href="http://www.biodiversidad.gob.mx/" target="_blank"><img class="over" src="img/biod_mex.jpg"/></a></div>
              <fieldset class="three cajcolum">
                <div class="resb2">Actualidad de la información</div>
                <div class="picker">
                  <input type="hidden" name="p6" value="1" />
				  <select name="p7">					
                    <option value="1">Actualizado</option>
                    <option value="2">No actualizado</option>
                    <option value="3">Sin fecha</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Confiabilidad del autor</div>
                <div class="picker">
                  <select name="p8">
                    <option value="1">Autor especializado</option>
                    <option value="2">Autor no especializado</option>
                    <option value="3">Sin autor</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del contenido</div>
                <div class="picker">
                  <select name="p9">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del sitio</div>
                <div class="picker">
                  <select name="p10">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
				  <input type="hidden" name="p31" value="4" />
                </div>
              </fieldset>
            </div>
			
            <div class="row">
              <div class="btnresp">
                <div class="medium default btn">
                  <input name="btn31" type="submit" value="Enviar evaluación" onclick="window.navigate('b2_08.php?p1=1')" value="btn1()" />
				</div>
              </div>
            </div>
          </form>
		  <div class="retro correcto" style="visibility:hidden;" ></div>
		  <?php } 
		  if($respuestas31>=1){ 
		  ?>
          <div class="retro correcto">El sitio de biodiversidad del gobierno mexicano, tiene indicado en sus créditos que fue creado en el 2012. No se indican las actualizaciones, ni tampoco la autoría de cada una de las partes del sitio. 
            Sin embargo, al ser un sitio “.gob.mx” hay que considerar que la información es fidedigna en caso de ciertos temas. Por otro lado, para temas más polémicos de la biodiversidad, donde intervienen intereses del Estado o los grupos de poder, un sitio de gobierno podría contener más propaganda que información. 
            La presentación y la calidad del sitio son excelentes. </div>
		<?php  } ?>	
		

<?php
//$sql_revisar32="SELECT COUNT(id_alumno) as 'respuestas' FROM cuestionario_b2_08_3 WHERE id_alumno='$numcta' AND p1=2 LIMIT 1;"; 
//$respuestas32=$conexion->getdb($sql_revisar32,"respuestas");/*Reviso si ya ha contestado antes */
		$respuestas32=$_GET['p32'];
		 if($respuestas32<1){ 
		?> 		
          <form class="field" action="b2_08.php" method="get" >
            <div class="row">
              <div class="imglig"><a href="http://www.monografias.com/trabajos11/bioltrece/bioltrece.shtml" target="_blank"><img class="over" src="img/monografias.jpg"/></a></div>
              <fieldset class="three cajcolum">
                <div class="resb2">Actualidad de la información</div>
                <input type="hidden" name="p6" value="2" />
				<div class="picker">
                  <select name="p7">
                    <option value="1">Actualizado</option>
                    <option value="2">No actualizado</option>
                    <option value="3">Sin fecha</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Confiabilidad  del autor</div>
                <div class="picker">
                  <select name="p8">
                    <option value="1">Autor especializado</option>
                    <option value="2">Autor no especializado</option>
                    <option value="3">Sin autor</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del contenido</div>
                <div class="picker">
                  <select name="p9">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del sitio</div>
                <div class="picker">
                  <select name="p10">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
				  <input type="hidden" name="p32" value="8" />
                </div>
              </fieldset>
            </div>
            <div class="row">
              <div class="btnresp">
                <div class="medium default btn">
                  <input type="submit" value="Enviar evaluación" onclick="p2()" value="btn1()"/>
                </div>
              </div>
            </div>
          </form>
		  <div class="retro correcto" style="visibility:hidden;" ></div>
		  <?php } 
		  if($respuestas32>=1){ 
		  ?>
		  
          <div class="retro correcto">Monografías.com es un sitio útil para tareas hechas al vapor, responde a ciertas necesidades. No obstante tiene información de calidad variable. 
            En este caso particular se pudo observar que la información presentada no tiene un autor especializado, ni fecha de publicación. 
            La presentación y la calidad del sitio son verdaderamente malas.</div>
          
		  <?php  } ?>	
	<?php
//$sql_revisar33="SELECT COUNT(id_alumno) as 'respuestas' FROM cuestionario_b2_08_3 WHERE id_alumno='$numcta' AND p1=3 LIMIT 1;"; 
//$respuestas33=$conexion->getdb($sql_revisar33,"respuestas");/*Reviso si ya ha contestado antes */
		$respuestas33=$_GET['p33'];
		 if($respuestas33<1){ 
		?>	  
		  <form class="field" action="b2_08.php" method="get" >
            <div class="row">
              <div class="imglig"><a href="http://www.revistaciencias.unam.mx/index.php?option=com_content&view=article&id=843%3Ala-biodiversidad-en-mexico-su-conservacion-y-las-colecciones-biologicas" target="_blank"><img class="over" src="img/revciencias.jpg"/></a></div>
              <fieldset class="three cajcolum">
                <div class="resb2">Actualidad de la información</div>
                <div class="picker">
				<input type="hidden" name="p6" value="3" />
                  <select name="p7">
                    <option value="1">Actualizado</option>
                    <option value="2">No actualizado</option>
                    <option value="3">Sin fecha</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Confiabilidad  del autor</div>
                <div class="picker">
                  <select name="p8">
                    <option value="1">Autor especializado</option>
                    <option value="2">Autor no especializado</option>
                    <option value="3">Sin autor</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del contenido</div>
                <div class="picker">
                  <select name="p9">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del sitio</div>
                <div class="picker">
                  <select name="p10">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
				  <input type="hidden" name="p33" value="14" />
                </div>
              </fieldset>
            </div>
            <div class="row">
              <div class="btnresp">
                <div class="medium default btn">
                  <input type="submit" value="Enviar evaluación" />
                </div>
              </div>
            </div>
          </form>
		  <div class="retro correcto" style="visibility:hidden;" ></div>
		  <?php } 
		  if($respuestas33>=1){ 
		  ?>
          <div class="retro correcto">Revistaciencias.unam.mx presenta una revista en formato digital, estas no se actualizan, se trata del número de enero-marzo del 2011.
            Los autores son reconocidos investigadores de la UNAM lo que hace que la información sea confiable y veraz. 
            La presentación y la calidad del sitio son excelentes.</div>
			<?php  } ?>	
			<?php
//$sql_revisar34="SELECT COUNT(id_alumno) as 'respuestas' FROM cuestionario_b2_08_3 WHERE id_alumno='$numcta' AND p1=4 LIMIT 1;"; 
//$respuestas34=$conexion->getdb($sql_revisar34,"respuestas");/*Reviso si ya ha contestado antes */
		$respuestas34=$_GET['p34'];
		 if($respuestas34<1){ 
		?>	
          <form class="field" action="b2_08.php" method="get" >
            <div class="row">
              <div class="imglig"><a href="https://es.wikipedia.org/wiki/Biodiversidad" target="_blank"><img class="over" src="img/wikipedia.jpg"/></a></div>
              <fieldset class="three cajcolum">
                <div class="resb2">Actualidad de la información</div>
                <div class="picker">
				<input type="hidden" name="p6" value="4" />
                  <select name="p7">
                    <option value="1">Actualizado</option>
                    <option value="2">No actualizado</option>
                    <option value="3">Sin fecha</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Confiabilidad  del autor</div>
                <div class="picker">
                  <select name="p8">
                    <option value="1">Autor especializado</option>
                    <option value="2">Autor no especializado</option>
                    <option value="3">Sin autor</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del contenido</div>
                <div class="picker">
                  <select name="p9">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
                </div>
              </fieldset>
              <fieldset class="three cajcolum">
                <div class="resb2">Calidad del sitio</div>
                <div class="picker">				
                  <select name="p10">
                    <option value="1">Excelente</option>
                    <option value="2">Regular</option>
                    <option value="3">Mala</option>
                  </select>
				  <input type="hidden" name="p34" value="44" />
                </div>
              </fieldset>
            </div>
            <div class="row">
              <div class="btnresp">
                <div class="medium default btn">
                  <input type="submit" value="Enviar evaluación" />
                </div>
              </div>
            </div>
          </form>
		 </div>
		 <div class="retro correcto" style="visibility:hidden;" ></div>
		  <?php } 
		  if($respuestas34>=1){ 
		  ?>
        <div class="retro correcto">Wikipedia.org es el proyecto de la enciclopedia mundial. Es una de las herramientas más útiles en el internet.
          Habrás observado, sin embargo, que Wikipedia carece de referencias a autores, o fechas de actualización. Aunque presenta mucha información buena, generalmente es sin orden o caótica. 
          La presentación y la calidad del sitio se pueden considerar regulares. </div>
		  <?php  } ?>	
      </div>
      <!-- Fin Tabs 3--> 
    </div>
    <!--Termina tabs-->
    <div class="aire"></div>
    <!-- Navegacion -->
    
    <div class="naveg">
      <div class="ant"> <a href="../bloque2/b2_07.php">anterior</a></div>
      <div class="sig"> <a href="../bloque2/b2_09.php">siguiente</a> </div>
    </div>
    
    <!-- Fin navegacion --> 
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
