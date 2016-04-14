<?php
require_once("../conexionh.php");
$conexion=new conexion();
$conexion->conectar();	
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
<title>¿Cuáles son las “estrategias de aprendizaje”?</title>
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
    <h1 class="titulo">¿Cuáles son las estrategias de aprendizaje más adecuadas?</h1>
    <div class="spacerer">
      <p>&nbsp;&nbsp;</p>
      <br>
      <br>
    </div>
          <p class="subtitulo">Propósito</p>
      <p> Con la siguiente actividad    identificarás las estrategias más adecuadas para lograr los objetivos de    aprendizaje que se te plantean en dos situaciones. </p>
      <p class="subtitulo">Instrucciones</p>
      <p> Revisa los siguientes dos    ejemplos en los que se presentan diferentes estrategias de aprendizaje y señala cuál de éstas sería la mejor  para cumplir    con el objetivo de la tarea.</p>


    <p class="resb2">Ejemplo  1:    &ldquo;¿Qué es el amor?&rdquo;</p>

    <div class="col5">
      <p>Se te pide<strong> explicar</strong> el fenómeno del amor desde una perspectiva biológica y para ello    se te proporciona el siguiente texto  de la Revista ¿Cómo ves?.</p>
      <p>&nbsp;</p>
		  	<div class="lectura"><a href="docs/que-es-el-amor-respuestas-desde-la-biologia.pdf" target="_blank" class="ligos">¿Qué es el amor?</a></div>
	  <p class="resligos">Da clic en la siguiente imagen para descargar el texto. </p>
     
              <p>&nbsp;</p>
    <a href="docs/que-es-el-amor-respuestas-desde-la-biologia.pdf" target="_blank"><img class="imag_cont"  src="img/b2_05_02.jpg" /></a>
    </div>
    <div class="col6"> <a href="docs/que-es-el-amor-respuestas-desde-la-biologia.pdf" target="_blank"><img class="imag_cont"  src="img/b2_05_01.jpg" /></a> </div>
    <div class="spacerer" style="margin-top:100px">
      <p>&nbsp;&nbsp;</p>
      <br>
      <br>
    </div>
   <a name="f1"></a>
<?php

$p1=0; 
$enviadas=0;
$mensaje_error="";
$esperadas=1;
if(isset($_POST["enviar1"])){
		for($cont=1;$cont<=$esperadas;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==$esperadas){
			$respuestas=1;
			/*$sql_guardar="update 80Preguntas set  p5o1='2' where id='57'";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);*/
		}
}

//$sql_revisar="SELECT count(id) as 'respuestas' from 80Preguntas where id='57' limit 1"; 
//$respuestas=$conexion->getdb($sql_revisar,"respuestas");/*Reviso si ya ha contestado antes */

//if($respuestas<1){
?>
<?php
/* mensajes de error*/
if(strlen($mensaje_error)>20){	?><center><br /><font color='#FF000'><?php echo $mensaje_error; ?></font></center><?php	}
?>

   <p class="resb2chi"> Selecciona cuál de las siguientes tres estrategias sería la más adecuada para lograr el objetivo de aprendizaje:</p>
   <a id="c1"></a>   
    <div class="bloquecols">
	
        <form action="#f1" method="post"  class="field">
          <fieldset class="blo1">
            <label class="radio <?php if($p1==1){ echo 'checked"';  } ?>" for="radio1">
              <input name="p1" id="radio1" value="1" type="radio" <?php if($p1==1){ echo 'checked="checked"';  } ?> >
              <span></span>
              <h2 class="cuesttext"> Opción 1</h2> </label>
              <hr / style="border:dashed 1px #66C">
           <div style="margin-left:60px">

           <ul>
           <ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Revisar la publicación, el texto, las imágenes, el autor.</p>
              </li>
              <li>
                <p>Leer el texto.</p>
              </li>
              <li>
                <p>Plantearse preguntas generales acerca del tema.</p>
              </li>
              <li>
                <p>Anotar ideas principales, hechos o detalles de la lectura.</p>
              </li>
              <li>
                <p>Realizar un esquema para tener una visión global del tema.</p>
              </li>
              <li>
                <p>Parafrasear las ideas principales, hechos o detalles de la lectura.</p>
              </li>
              <li>
                <p>Reflexionar acerca de los contenidos y plantear preguntas de profundización.</p>
              </li>
              <li>
                <p>Redactar un informe explicativo sobre el tema.</p>
              </li>
            </ul>
             </ul>
              </ul>
</div>
          </fieldset>
          <fieldset class="blo2">
            <label class="radio  <?php if($p1==2){ echo 'checked"';  } ?>" for="radio2">
              <input name="p1" id="radio2" value="2" type="radio" <?php if($p1==2){ echo 'checked="checked"';  } ?> >
              <span></span> <h2 class="cuesttext"> Opción 2</h2> </label><hr / style="border:dashed 1px #66C">
           <div style="margin-left:60px">
           <ul>
           <ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Leer el texto.</p>
              </li>
              <li>
                <p>Anotar ideas principales, hechos o detalles de la lectura.</p>
              </li>
              <li>
                <p>Recuperar las ideas principales de los recursos y redactar un resumen.</p>
              </li>
              <li>
                <p>Reflexionar sobre el impacto biológico del amor en la vida personal.</p>
              </li>
              <li>
                <p>Hacer un Power Point para explicar el tema.</p>
              </li>
            </ul>
            </ul>
            </ul>
            </div>

          </fieldset>
          <fieldset class="blo3">
            <label class="radio <?php if($p1==3){ echo 'checked"';  } ?>" for="radio3">
              <input name="p1" id="radio3" value="3" type="radio" <?php if($p1==3){ echo 'checked="checked"';  } ?> >
              <span></span>
              <h2 class="cuesttext"> Opción 3</h2>
              <hr / style="border:dashed 1px #66C"> </label>
           <div style="margin-left:60px">

            <ul>
            <ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Revisar la publicación, el texto, las imágenes, el autor.</p>
              </li>
              <li>
                <p>Leer el texto.</p>
              </li>
              <li>
                <p>Plantearse preguntas generales acerca del tema.</p>
              </li>
              <li>
                <p>Anotar ideas principales, hechos o detalles de la lectura.</p>
              </li>
              <li>
                <p>Hacer un resumen</p>
              </li>
            </ul>
            </ul>
            </ul>
</div>
          </fieldset>
        
          <div class="row"><center>
            <div class="medium default btn">
			<?php if($respuestas<1){  ?>
              <input name="enviar1" type="submit" value="Comparar Respuestas"  />
			  <?php }  ?>
            </div></center>
          </div>
        </form>
   	</div>
	
    <center>
	<?php if($respuestas>=1){  ?>
    <div class="retrocue">
    <!--aquï va la retro del ejercicios, hay que programarla, para que salga cuando damos clic en el botón de comparar respuestas.-->

      <p>Para alcanzar el objetivo: &ldquo;<span class="resb2meb">Explicar    el fenómeno del amor desde una perspectiva biológica&rdquo; </span>que se te asignó, hay muchas estrategias de aprendizaje posibles. </p>
         <p>   Recuerda que una estrategia es el camino (como    los pasos de las dos primeras opciones) que empleas de manera deliberada e    intencional para lograr un objetivo de aprendizaje. En este proceso    seleccionas una serie de conocimientos, procedimientos y técnicas de acuerdo    con las exigencias de la tarea o el problema específico a resolver.</p>
          <p>  Entre las tres opciones las dos primeras parecen las más acertadas.    La tercera no responde al objetivo planteado porque el resumen recupera las    ideas del autor del texto y no tiene la intención de explicar a profundidad    el tema del amor desde una perspectiva biológica. </p>
    </div>
    </center>
    <?php } ?>
    
        <div class="spacerer" style="margin-top:50px">


    </div>
    <p class="resb2">Ejemplo 2: “El efecto mariposa”</p>
   <p> Se te pide exponer “el impacto del efecto mariposa en nuestra vida cotidiana” para la entrega de un trabajo (dentro de 1 día). Se te ofrece el siguiente recurso:</p>

      <div class="col3">
        

        <p >&nbsp;</p>
                        <p >&nbsp;</p>
        <span class="videin"> Imaginantes. El efecto mariposa</span>
        

        <p >&nbsp;</p>
        
          <img src="img/flecha.png"  />
           <p >&nbsp;</p>
            <p >&nbsp;</p>

      </div>
      
	  
	  
      <div class="col4">
          <center>  
          <div class="video_cont" style="width:580px">
            <iframe width="480" height="360" src="//www.youtube.com/embed/f4a_GymZS1Q" frameborder="0" allowfullscreen></iframe>
          <p class="imagespie">Imaginantes. El efecto mariposa. Recuperado de  http://www.youtube.com/watch?v=f4a_GymZS1Q   (julio, 2013).</p>
          </div>
    </center>
    </div>
	<div class="spacerer" style="margin-top:430px"></div>
	<a name="f2"></a>
	
	<?php

$p2=0; 
$enviadas2=0;
$mensaje_error2="";
$esperadas2=1;
if(isset($_POST["enviar2"])){
		if(isset($_POST["p2"])){$p2=$_POST["p2"]; $enviadas2++;}else{ $mensaje_error2.="Falta contestar la pregunta 2<br>";};
		
		if($enviadas2==$esperadas2){
			$respuestas2=1;
			/*$sql_guardar2="update 80Preguntas set  p5o1='2' where id='57'";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar2);*/
		}
}

//$sql_revisar2="SELECT count(id) as 'respuestas' from 80Preguntas where id='57' limit 1"; 
//$respuestas2=$conexion->getdb($sql_revisar2,"respuestas");/*Reviso si ya ha contestado antes */

if($respuestas2<1){
?>
                  <p class="resb2chi">Selecciona cuál de las siguientes tres estrategias sería la más adecuada  para lograr el objetivo de aprendizaje:</p>
  <a id="c2"></a>
<?php
/* mensajes de error*/
if(strlen($mensaje_error2)>20){	?><center><br /><font color='#FF000'><?php echo $mensaje_error2; ?></font></center><?php	}
?>
  <div class="bloquecols">
        <form class="field" action="#f2" method="post" >
          <fieldset class="blo21">
            <label class="radio <?php if($p2==1){ echo 'checked"';  } ?>" for="radio1">
              <input name="p2" id="radio1" value="1" type="radio" <?php if($p2==1){ echo 'checked="checked"';  } ?>>
              <span></span>
              <h2 class="cuesttext"> Opción 1</h2> </label>
              <hr / style="border:dashed 1px #66C">
                      <div style="margin-left:60px">

              <ul>
              <ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Plantearse preguntas generales acerca del tema.</p>
              </li>
              <li>
                <p>Revisar nuevamente el video.</p>
              </li>
              <li>
                <p>Anotar ideas principales, hechos o detalles.</p>
              </li>
              <li>
                <p>Parafrasear las ideas principales, hechos o detalles.</p>
              </li>
              <li>
                <p>Redactar un informe explicativo sobre el tema.</p>
              </li>
            </ul>
			</ul>
            </ul>
            
            </div>
          </fieldset>
          <fieldset class="blo22">
            <label class="radio  <?php if($p2==2){ echo 'checked"';  } ?>" for="radio2">
              <input name="p2" id="radio2" value="2" type="radio" <?php if($p2==2){ echo 'checked="checked"';  } ?> >
              <span></span> <h2 class="cuesttext"> Opción 2</h2> </label><hr / style="border:dashed 1px #66C">
   <div style="margin-left:60px">        
    <ul>                
<ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Anotar las ideas principales.</p>
              </li>
              <li>
                <p>Investigar más acerca del tema. </p>
              </li>
              <li>
                <p>Reflexionar sobre el impacto del efecto mariposa en tu propia vida.</p>
              </li>
              <li>
                <p>Escribir un breve escenario hipotético de cómo el efecto mariposa influyó en una etapa concreta de tu vida.</p>
              </li>
                            <li>
                <p>Exponer tu escrito ante el salón de clase.</p>
              </li>
 </ul>
            </ul>
            </ul>
            </div>

          </fieldset>
          <fieldset class="blo23">
            <label class="radio  <?php if($p2==3){ echo 'checked"';  } ?>"" for="radio3">
              <input name="p2" id="radio3" value="3" type="radio"  <?php if($p2==3){ echo 'checked="checked"';  } ?> >
              <span></span>
              <h2 class="cuesttext"> Opción 3</h2>
              <hr / style="border:dashed 1px #66C"> </label>
            
               <div style="margin-left:60px">        
<ul>
<ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Anotar las ideas principales.</p>
              </li>
              <li>
                <p>Hacer un mapa mental. </p>
              </li>
              <li>
                <p>Investigar más acerca del tema.</p>
              </li>
              <li>
                <p>Realizar un podcast sobre el tema.</p>
              </li>

              </li>
              <li>
                <p>Presentar la grabación ante el salón de clase.</p>
              </li>            </ul>
              </ul>
              </ul>
              </div>

          </fieldset>
        
          <div class="row">
            <center><div class="medium default btn">
              <input type="submit" name="enviar2" value="Comparar Respuestas" />
            </div></center>
          </div>
        </form>
   	</div>
<?php } ?>

<?php if($respuestas2>=1){  ?>
<div class="bloquecols">
        <form class="field" action="#f2" method="post" >
          <fieldset class="blo21">
            <label class="radio <?php if($p2==1){ echo 'checked"';  } ?>" for="radio1">
              <input name="p2" id="radio1" value="1" type="radio" <?php if($p2==1){ echo 'checked="checked"';  } ?>>
              <span></span>
              <h2 class="cuesttext"> Opción 1</h2> </label>
              <hr / style="border:dashed 1px #66C">
                      <div style="margin-left:60px">

              <ul>
              <ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Plantearse preguntas generales acerca del tema.</p>
              </li>
              <li>
                <p>Revisar nuevamente el video.</p>
              </li>
              <li>
                <p>Anotar ideas principales, hechos o detalles.</p>
              </li>
              <li>
                <p>Parafrasear las ideas principales, hechos o detalles.</p>
              </li>
              <li>
                <p>Redactar un informe explicativo sobre el tema.</p>
              </li>
            </ul>
			</ul>
            </ul>
            
            </div>
          </fieldset>
          <fieldset class="blo22">
            <label class="radio  <?php if($p2==2){ echo 'checked"';  } ?>" for="radio2">
              <input name="p2" id="radio2" value="2" type="radio" <?php if($p2==2){ echo 'checked="checked"';  } ?> >
              <span></span> <h2 class="cuesttext"> Opción 2</h2> </label><hr / style="border:dashed 1px #66C">
   <div style="margin-left:60px">        
    <ul>                
<ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Anotar las ideas principales.</p>
              </li>
              <li>
                <p>Investigar más acerca del tema. </p>
              </li>
              <li>
                <p>Reflexionar sobre el impacto del efecto mariposa en tu propia vida.</p>
              </li>
              <li>
                <p>Escribir un breve escenario hipotético de cómo el efecto mariposa influyó en una etapa concreta de tu vida.</p>
              </li>
                            <li>
                <p>Exponer tu escrito ante el salón de clase.</p>
              </li>
 </ul>
            </ul>
            </ul>
            </div>

          </fieldset>
          <fieldset class="blo23">
            <label class="radio  <?php if($p2==3){ echo 'checked"';  } ?>"" for="radio3">
              <input name="p2" id="radio3" value="3" type="radio"  <?php if($p2==3){ echo 'checked="checked"';  } ?> >
              <span></span>
              <h2 class="cuesttext"> Opción 3</h2>
              <hr / style="border:dashed 1px #66C"> </label>
            
               <div style="margin-left:60px">        
<ul>
<ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li>
                <p>Observar el video.</p>
              </li>
              <li>
                <p>Anotar las ideas principales.</p>
              </li>
              <li>
                <p>Hacer un mapa mental. </p>
              </li>
              <li>
                <p>Investigar más acerca del tema.</p>
              </li>
              <li>
                <p>Realizar un podcast sobre el tema.</p>
              </li>

              </li>
              <li>
                <p>Presentar la grabación ante el salón de clase.</p>
              </li>            </ul>
              </ul>
              </ul>
              </div>

          </fieldset>
        
          <div class="row">
            <center><div class="medium default btn">
              
            </div></center>
          </div>
        </form>
   	</div>



     <p class="resb2chi"><br></p>
  <a id="c2"></a>
	<center>
    <div class="retrocue">
    <!--aquï va la retro del ejercicios, hay que programarla, para que salga cuando damos clic en el botón de comparar respuestas.-->

     <p>Como en el ejemplo anterior, no hay una sola estrategia de    aprendizaje posible para alcanzar el objetivo propuesto en la actividad     <span class="resb2chi">&ldquo;Exponer el impacto del    efecto mariposa en nuestra vida cotidiana&rdquo;</span></p>
           <p> Un punto importante a considerar es que la tarea se tiene que    resolver de un día para otro, así tendrás que organizar bien tu tiempo.    También es necesario identificar que el tema del efecto mariposa debe    relacionarse con tu vida cotidiana.</p>
           <p> En este caso parece que la <span class="resb2chi">opción    2 es la más adecuada:</span> en el camino trazado para llegar al objetivo se    toma en cuenta el aspecto vivencial y la escritura creativa. También la opción 3 parece    buena, pero tiene dos problemas: para hacer un <em>podcast</em> es importante hacer un guion o escenario previo y hay que    considerar el tiempo que se requiere para elaborarlo adecuadamente. </p>
        <p>En la primera opción solamente se recupera la información del video,    así que no se ha interpretado bien el objetivo de aprendizaje propuesto en    la actividad.</p>

    </div>
    </center>
<?php } ?>	
<!-- Navegacion --> 
        
    <div class="naveg">
      <div class="ant"> <a href="../bloque2/b2_04.php">anterior</a></div>
      <div class="sig"> <a href="../bloque2/b2_06.php">siguiente</a> </div>
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
