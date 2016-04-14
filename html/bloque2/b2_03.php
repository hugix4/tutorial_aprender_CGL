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
<title>Cuestionario: Honey-Alonso</title>
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
<link rel="stylesheet" href="../css/cuest.css">
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
    <div class="aire"> </div>

      <h1 class="titulo">Cuestionario: Estilos de Aprendizaje Honey-Alonso <br>
¿Cuál es el tuyo? </h1>

        <div class="col4">
             <center>
             <img class="imag_cont" src="img/b2_03_01.jpg" />
             </center>

  </div>
  
  <div class="col3">
  <div class="resalte" >
   <p class="resb2meb">Las investigaciones de Peter    Honey acerca de los estilos de aprendizaje en el mundo empresarial fueron    recogidos en España por Catalina Alonso en 1992, quién adoptó el cuestionario    de estilos de aprendizaje al ámbito académico y al idioma español. Este    cuestionario es uno de los más probados y refleja tus preferencias de aprendizaje.</p>
        <center> <span class="resb2"> ¡Descúbrete!</span> </center>
      </div>
    </div>
      <div class="spacerer"> <p>&nbsp;</p> </div>
   <p class="cuestionario"> Cuestionario </p>
		<a name="x"></a>
        <p>Lee atentamente los    siguientes enunciados y marca en la casilla si corresponde o no con tu forma    de ser. Recuerda que no hay respuestas correctas o incorrectas. </p>
    <h1 class="cuest">Estilos de Aprendizaje Honey-Alonso</h1>
	
	<?php
	/* seccion de guardar */
	$p1=2; $p2=2; $p3=2; $p4=2; $p5=2; $p6=2; $p7=2; $p8=2; $p9=2; $p10=2; $p11=2; $p12=2; $p13=2; $p14=2; $p15=2; $p16=2; $p17=2; $p18=2; $p19=2; $p20=2; $p21=2; $p22=2; $p23=2; $p24=2; $p25=2; $p26=2; $p27=2; $p28=2; $p29=2; $p30=2; $p31=2; $p32=2; $p33=2; $p34=2; $p35=2; $p36=2; $p37=2; $p38=2; $p39=2; $p40=2; $p41=2; $p42=2; $p43=2; $p44=2; $p45=2; $p46=2; $p47=2; $p48=2; $p49=2; $p50=2; $p51=2; $p52=2; $p53=2; $p54=2; $p55=2; $p56=2; $p57=2; $p58=2; $p59=2; $p60=2; $p61=2; $p62=2; $p63=2; $p64=2; $p65=2; $p66=2; $p67=2; $p68=2; $p69=2; $p70=2; $p71=2; $p72=2; $p73=2; $p74=2; $p75=2; $p76=2; $p77=2; $p78=2; $p79=2; $p80=2; 
	$enviadas=0;
	$aleatorio=rand();
	$numcta=57;
			
	$mensaje_error="";
	if(isset($_POST["enviar1"])){
		for($cont=1;$cont<=10;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="INSERT INTO 80Preguntas( rguardadas, id, fecha, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10 ) VALUES( 10,'$numcta', NOW(), $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10); ";
			$conexion->consulta($sql_guardar);			
		}
	}
	
	if(isset($_POST["enviar2"])){
		for($cont=11;$cont<=20;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p11=$p11, p12=$p12, p13=$p13, p14=$p14, p15=$p15, p16=$p16, p17=$p17, p18=$p18, p19=$p19, p20=$p20, rguardadas=20, fecha=NOW() WHERE  id='$numcta';";
			$conexion->consulta($sql_guardar);
		}
	}
	
	if(isset($_POST["enviar3"])){
		for($cont=21;$cont<=30;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p21=$p21, p22=$p22, p23=$p23, p24=$p24, p25=$p25, p26=$p26, p27=$p27, p28=$p28, p29=$p29, p30=$p30, rguardadas=30, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
		}
	}
	
	if(isset($_POST["enviar4"])){
		for($cont=31;$cont<=40;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p31=$p31, p32=$p32, p33=$p33, p34=$p34, p35=$p35, p36=$p36, p37=$p37, p38=$p38, p39=$p39, p40=$p40, rguardadas=40, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
		}
	}
	
	
	if(isset($_POST["enviar5"])){
		for($cont=41;$cont<=50;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p41=$p41, p42=$p42, p43=$p43, p44=$p44, p45=$p45, p46=$p46, p47=$p47, p48=$p48, p49=$p49, p50=$p50, rguardadas=50, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
		}
	}
	
	if(isset($_POST["enviar6"])){
		for($cont=51;$cont<=60;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p51=$p51, p52=$p52, p53=$p53, p54=$p54, p55=$p55, p56=$p56, p57=$p57, p58=$p58, p59=$p59, p60=$p60, rguardadas=60, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
		}
	}
	
	if(isset($_POST["enviar7"])){
		for($cont=61;$cont<=70;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p61=$p61, p62=$p62, p63=$p63, p64=$p64, p65=$p65, p66=$p66, p67=$p67, p68=$p68, p69=$p69, p70=$p70, rguardadas=70, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
		}
	}
	
	if(isset($_POST["enviar8"])){
		for($cont=71;$cont<=80;$cont++){
			if(isset($_POST["p".$cont])){$var="p".$cont;$$var=$_POST["p$cont"]; $enviadas++;}else{ $mensaje_error.="Falta contestar la pregunta $cont<br>";};
		}
		if($enviadas==10){
			$sql_guardar="UPDATE 80Preguntas SET p71=$p71, p72=$p72, p73=$p73, p74=$p74, p75=$p75, p76=$p76, p77=$p77, p78=$p78, p79=$p79, p80=$p80, rguardadas=80, fecha=NOW() WHERE  id='$numcta';";
			//echo $sql_guardar;
			$conexion->consulta($sql_guardar);
			$sql_recupera1="SELECT * FROM 80Preguntas WHERE id='$numcta' LIMIT 1;"; 
			$rs_02=$conexion->consulta($sql_recupera1);
			while ($reg_02 = mysql_fetch_array($rs_02, MYSQL_ASSOC))  
			{  
				for($cont=1;$cont<=70;$cont++){
					$var="p".$cont;
					$$var=$reg_02[$var];
					
				}
			}
			$activo=$p3+$p5+$p7+$p9+$p13+$p20+$p26+$p27+$p35+$p37+$p41+$p43+$p46+$p48+$p51+$p61+$p67+$p74+$p75+$p77;
			$reflexivo=$p10+$p16+$p18+$p19+$p28+$p31+$p32+$p34+$p36+$p39+$p42+$p44+$p49+$p55+$p58+$p63+$p65+$p69+$p70+$p79;
			$teorico=$p2+$p4+$p6+$p11+$p15+$p17+$p21+$p23+$p25+$p29+$p33+$p45+$p50+$p54+$p60+$p64+$p66+$p71+$p78+$p80;
			$pragmatico=$p1+$p8+$p12+$p14+$p22+$p24+$p30+$p38+$p40+$p47+$p52+$p53+$p56+$p57+$p59+$p62+$p68+$p72+$p73+$p76;
			$total=$activo+$reflexivo+$teorico+$pragmatico;
			$porciento_activo=sprintf("%.2f",($activo/$total)*100);
			$porciento_reflexivo=sprintf("%.2f",($reflexivo/$total)*100);
			$porciento_teorico=sprintf("%.2f",($teorico/$total)*100);		
			$porciento_pragmatico=sprintf("%.2f",($pragmatico/$total)*100);	
			
			$sql_guardar2="UPDATE 80Preguntas SET activo=$porciento_activo, reflexivo=$porciento_reflexivo, teorico=$porciento_teorico, pragmatico=$porciento_pragmatico, fecha=NOW() WHERE  id='$numcta';";
			$conexion->consulta($sql_guardar2);
		}	
	}
	
	$sql_revisar="SELECT COUNT(id) as 'respuestas' FROM 80Preguntas WHERE id='$numcta';"; 
	$respuestas=$conexion->getdb($sql_revisar,"respuestas");/*Reviso si ya ha contestado antes */
	$rguardadas=0;
	if($respuestas>0){
		$sql_guardadas="SELECT rguardadas as 'x' FROM 80Preguntas WHERE id = '$numcta' LIMIT 1;"; 
		//echo $sql_guardadas;
		$rguardadas=$conexion->getdb($sql_guardadas,"x");/*Reviso si ya hay alguna */
	}else{
		$rguardadas=0;
	}
	 //print_r($_POST);
	
	if(strlen($mensaje_error)>20){
	?><br /><font color='#FF000'><?php echo $mensaje_error; ?></font><?php
	}
	
	
	if($rguardadas<80){  /* inicio barra de progreso */
	?>
	<style type="text/css">
      .ProgressBar     { width: 16em; border: 1px solid black; background: #eef; height: 1.25em; display: block; }
      .ProgressBarText { position: absolute; font-size: 12px; width: 16em; text-align: center; font-weight: normal; }
      .ProgressBarFill { height: 100%; background: #69a442; display: block; overflow: visible; }
    </style>
	
	<div class="ProgressBar">
      <div class="ProgressBarText"><?php printf("%.2f", ($rguardadas/80.0)*100 );  ?>% completado</div>
      <div class="ProgressBarFill" style="width: <?php printf("%.2f", ($rguardadas/80.0)*100 );  ?>%;"></div>
    </div>
	<br><?php	}  /* fin barra de progreso */
	
	
	if($rguardadas==0){
		/* formulario 1 inicio */
		?>
		
	<form action="#x" style="margin: 0 auto;  "  method="post" id="miform">
      <label for="p1" class="radio">1. Tengo la costumbre de decir lo que pienso claramente y sin rodeos.</label>
      <div class="respuestas">
        <input type="radio" name="p1" value="1" <?php if($p1==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p1" value="0" <?php if($p1==0){ echo 'checked="checked"';  } ?> />
        No </div>
		
      <label for="p2" class="radio">2. Estoy seguro(a) de lo que es bueno y lo que es malo, lo que está bien y lo que está mal. </label>
      <div class="respuestas">
        <input type="radio" name="p2" value="1" <?php if($p2==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p2" value="0" <?php if($p2==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p3" class="radio">3. Muchas veces actúo sin considerar las consecuencias. </label>
      <div class="respuestas">
        <input type="radio" name="p3" value="1" <?php if($p3==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p3" value="0" <?php if($p3==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p4" class="radio"> 4. Normalmente trato de resolver los problemas ordenadamente y paso a paso. </label>
      <div class="respuestas">
        <input type="radio" name="p4" value="1" <?php if($p4==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p4" value="0" <?php if($p4==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p5" class="radio">5. Creo que la formalidad limita la actuación libre de las personas. </label>
      <div class="respuestas">
        <input type="radio" name="p5" value="1" <?php if($p5==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p5" value="0" <?php if($p5==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p6" class="radio">6. Me interesa saber cuáles son los valores de los demás y los criterios con qué actúan. </label>
      <div class="respuestas">
        <input type="radio" name="p6" value="1" <?php if($p6==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p6" value="0" <?php if($p6==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p7" class="radio">7. Pienso que guiarse por la intuición puede ser siempre tan adecuado como actuar reflexivamente. </label>
      <div class="respuestas">
        <input type="radio" name="p7" value="1" <?php if($p7==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p7" value="0" <?php if($p7==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p8" class="radio">8. Creo que lo más importante es que las cosas funcionen. </label>
      <div class="respuestas">
        <input type="radio" name="p8" value="1" <?php if($p8==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p8" value="0" <?php if($p8==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p9" class="radio">9. Procuro estar al pendiente de lo que ocurre aquí y ahora. </label>
      <div class="respuestas">
        <input type="radio" name="p9" value="1" <?php if($p9==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p9" value="0" <?php if($p9==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p10" class="radio">10. Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia. </label>
      <div class="respuestas">
        <input type="radio" name="p10" value="1" <?php if($p10==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p10" value="0" <?php if($p10==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <br />
       
      <div class="btnresp" align="center" style="margin-top:400px">
      <center><div class="medium default btn"><input  name="enviar1" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
	
		<?php
		/* formulario 1 fin */
	}else if($rguardadas==10){
		/* formulario 2 inicio */		
		?>
	<form action="#x" method="post" id="miform">
     <label for="p11" class="radio">11. Estoy a gusto siguiendo un orden, en las comidas, en el estudio, haciendo ejercicio regularmente. </label>
      <div class="respuestas">
        <input type="radio" name="p11" value="1" <?php if($p11==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p11" value="0" <?php if($p11==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p12" class="radio">12. Cuando escucho una nueva idea, enseguida comienzo a pensar cómo ponerla en práctica. </label>
      <div class="respuestas">
        <input type="radio" name="p12" value="1" <?php if($p12==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p12" value="0" <?php if($p12==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p13" class="radio">13. Prefiero las ideas originales y novedosas aunque no sean prácticas. </label>
      <div class="respuestas">
        <input type="radio" name="p13" value="1" <?php if($p13==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p13" value="0" <?php if($p13==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p14" class="radio">14. Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos. </label>
      <div class="respuestas">
        <input type="radio" name="p14" value="1" <?php if($p14==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p14" value="0" <?php if($p14==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p15" class="radio">15. Normalmente encajo bien con personas reflexivas, y me cuesta relacionarme con personas demasiado espontáneas, imprevisibles. </label>
      <div class="respuestas">
        <input type="radio" name="p15" value="1" <?php if($p15==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p15" value="0" <?php if($p15==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p16" class="radio">16. Generalmente prefiero escuchar más que hablar. </label>
      <div class="respuestas">
        <input type="radio" name="p16" value="1" <?php if($p16==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p16" value="0" <?php if($p16==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p17" class="radio">17. Prefiero las cosas estructuradas por encima de las desordenadas. </label>
      <div class="respuestas">
        <input type="radio" name="p17" value="1" <?php if($p17==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p17" value="0" <?php if($p17==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p18" class="radio">18. Cuando poseo cualquier información, trato de interpretarla bien antes de sacar alguna conclusión. </label>
      <div class="respuestas">
        <input type="radio" name="p18" value="1" <?php if($p18==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p18" value="0" <?php if($p18==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p19" class="radio">19. Antes de hacer algo reflexiono con cuidado acerca de sus ventajas y desventajas. </label>
      <div class="respuestas">
        <input type="radio" name="p19" value="1" <?php if($p19==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p19" value="0" <?php if($p19==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p20" class="radio">20. Aprendo con el reto de hacer algo nuevo y diferente. </label>
      <div class="respuestas">
        <input type="radio" name="p20" value="1" <?php if($p20==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p20" value="0" <?php if($p20==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <br />
       
      <div class="btnresp" style="margin-top:400px">
      <center><div class="medium default btn"><input  name="enviar2" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php	
		/* formulario 2 fin */
	}else if($rguardadas==20){
		/* formulario 3 inicio */
		?>
	<form action="#x" method="post" id="miform">
 <label for="p21" class="radio">21. Casi siempre procuro ser coherente con mis criterios y valores. Tengo principios y los sigo. </label>
      <div class="respuestas">
        <input type="radio" name="p21" value="1" <?php if($p21==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p21" value="0" <?php if($p21==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p22" class="radio">22. Cuando hay una discusión  digo las cosas sin rodeos. </label>
      <div class="respuestas">
        <input type="radio" name="p22" value="1" <?php if($p22==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p22" value="0" <?php if($p22==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p23" class="radio">23. No me agrada relacionarme afectivamente en mi ambiente de trabajo. Prefiero mantenerme  distante. </label>
      <div class="respuestas">
        <input type="radio" name="p23" value="1" <?php if($p23==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p23" value="0" <?php if($p23==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p24" class="radio">24. Me gustan más las personas con enfoque realista y concreto en lugar de las personas con enfoque teórico. </label>
      <div class="respuestas">
        <input type="radio" name="p24" value="1" <?php if($p24==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p24" value="0" <?php if($p24==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p25" class="radio">25. Me cuesta ser creativo(a) y romper estructuras. </label>
      <div class="respuestas">
        <input type="radio" name="p25" value="1" <?php if($p25==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p25" value="0" <?php if($p25==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p26" class="radio">26. Me siento a gusto con personas espontáneas y divertidas. </label>
      <div class="respuestas">
        <input type="radio" name="p26" value="1" <?php if($p26==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p26" value="0" <?php if($p26==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p27" class="radio">27. La mayoría de las veces expreso abiertamente cómo me siento. </label>
      <div class="respuestas">
        <input type="radio" name="p27" value="1" <?php if($p27==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p27" value="0" <?php if($p27==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p28" class="radio">28. Me gusta analizar y dar vueltas a las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p28" value="1" <?php if($p28==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p28" value="0" <?php if($p28==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p29" class="radio">29. Me molesta que la gente no se tome en serio las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p29" value="1" <?php if($p29==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p29" value="0" <?php if($p29==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p30" class="radio">30. Me atrae experimentar y practicar las últimas técnicas y novedades. </label>
      <div class="respuestas">
        <input type="radio" name="p30" value="1" <?php if($p30==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p30" value="0" <?php if($p30==0){ echo 'checked="checked"';  } ?> />
        No </div>
	<br />
       
      <div class="btnresp" style="margin-top:400px">
      <center><div class="medium default btn"><input  name="enviar3" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php

		/* formulario 3 fin */
	}else if($rguardadas==30){
		/* formulario 4 inicio */
		
				?>
	<form action="#x" method="post" id="miform">
 <label for="p31" class="radio">31. Soy cauteloso(a) a la hora de sacar conclusiones. </label>
      <div class="respuestas">
        <input type="radio" name="p31" value="1" <?php if($p31==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p31" value="0" <?php if($p31==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p32" class="radio">32. Prefiero contar con el mayor número de fuentes de información. Cuanto más datos se reúnan para reflexionar, mejor. </label>
      <div class="respuestas">
        <input type="radio" name="p32" value="1" <?php if($p32==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p32" value="0" <?php if($p32==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p33" class="radio">33.  Tiendo a ser perfeccionista. </label>
      <div class="respuestas">
        <input type="radio" name="p33" value="1" <?php if($p33==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p33" value="0" <?php if($p33==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p34" class="radio">34. Prefiero escuchar las opiniones de los demás antes de exponer las mías. </label>
      <div class="respuestas">
        <input type="radio" name="p34" value="1" <?php if($p34==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p34" value="0" <?php if($p34==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p35" class="radio">35. Me gusta la espontaneidad y no tener que planificar todo previamente. </label>
      <div class="respuestas">
        <input type="radio" name="p35" value="1" <?php if($p35==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p35" value="0" <?php if($p35==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p36" class="radio">36. En las discusiones me gusta observar cómo actúan los demás participantes. </label>
      <div class="respuestas">
        <input type="radio" name="p36" value="1" <?php if($p36==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p36" value="0" <?php if($p36==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p37" class="radio">37. Me siento incómodo(a) con las personas calladas y demasiado analíticas. </label>
      <div class="respuestas">
        <input type="radio" name="p37" value="1" <?php if($p37==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p37" value="0" <?php if($p37==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p38" class="radio">38. Juzgo con frecuencia las ideas de los demás por su valor práctico. </label>
      <div class="respuestas">
        <input type="radio" name="p38" value="1" <?php if($p38==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p38" value="0" <?php if($p38==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p39" class="radio">39. Me agobio si me obligan a acelerar mucho el trabajo para cumplir con un plazo. </label>
      <div class="respuestas">
        <input type="radio" name="p39" value="1" <?php if($p39==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p39" value="0" <?php if($p39==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p40" class="radio">40. En las reuniones, apoyo las ideas prácticas y realistas. </label>
      <div class="respuestas">
        <input type="radio" name="p40" value="1" <?php if($p40==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p40" value="0" <?php if($p40==0){ echo 'checked="checked"';  } ?> />
        No </div>
	<br />
       
      <div class="btnresp" style="margin-top:400px">
      <center><div class="medium default btn"><input  name="enviar4" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php
		
		/* formulario 4 fin */
	}else if($rguardadas==40){	
		/* formulario 5 inicio */
		
		?>
		<form action="#x" method="post" id="miform">
		
		<label for="p41" class="radio">41. Es mejor gozar el presente que deleitarse pensando en el pasado o en el futuro. </label>
      <div class="respuestas">
        <input type="radio" name="p41" value="1" <?php if($p41==1){ echo 'checked="checked"';  } ?> />
        Si
        <input type="radio" name="p41" value="0" <?php if($p41==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p42" class="radio">42. Me molestan las personas que siempre desean apresurar las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p42" value="1" <?php if($p42==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p42" value="0" <?php if($p42==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p43" class="radio">43. Aporto ideas nuevas y espontáneas en los grupos de discusión. </label>
      <div class="respuestas">
        <input type="radio" name="p43" value="1" <?php if($p43==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p43" value="0" <?php if($p43==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p44" class="radio">44. Pienso que son más consistentes las decisiones fundamentadas en un minucioso análisis que las basadas en la intuición. </label>
      <div class="respuestas">
        <input type="radio" name="p44" value="1" <?php if($p44==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p44" value="0" <?php if($p44==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p45" class="radio">45. Detecto frecuentemente la inconsistencia y puntos débiles en las argumentaciones de los demás. </label>
      <div class="respuestas">
        <input type="radio" name="p45" value="1" <?php if($p45==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p45" value="0" <?php if($p45==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p46" class="radio">46. Creo que es preciso saltarse las normas muchas más veces que cumplirlas. </label>
      <div class="respuestas">
        <input type="radio" name="p46" value="1" <?php if($p46==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p46" value="0" <?php if($p46==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p47" class="radio">47. Frecuentemente me doy cuenta de que hay otras formas mejores y más prácticas de hacer las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p47" value="1" <?php if($p47==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p47" value="0" <?php if($p47==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p48" class="radio">48. Generalmente hablo más de lo que escucho. </label>
      <div class="respuestas">
        <input type="radio" name="p48" value="1" <?php if($p48==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p48" value="0" <?php if($p48==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p49" class="radio">49. Prefiero alejarme de los hechos y observarlos desde otras perspectivas. </label>
      <div class="respuestas">
        <input type="radio" name="p49" value="1" <?php if($p49==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p49" value="0" <?php if($p49==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p50" class="radio">50. Estoy convencido(a) que debe imponerse la lógica y el razonamiento. </label>
      <div class="respuestas">
        <input type="radio" name="p50" value="1" <?php if($p50==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p50" value="0" <?php if($p50==0){ echo 'checked="checked"';  } ?> />
        No </div>
		
		<br />
      <div class="btnresp" style="margin-top:420px">
      <center><div class="medium default btn"><input  name="enviar5" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php
		/* formulario 5 fin */
	}else if($rguardadas==50){	
		/* formulario 6 inicio */
		?>
		<form action="#x" method="post" id="miform">
		
	<label for="p51" class="radio">51. Me gusta buscar nuevas experiencias. </label>
      <div class="respuestas">
        <input type="radio" name="p51" value="1" <?php if($p51==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p51" value="0" <?php if($p51==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p52" class="radio">52. Me gusta experimentar y aplicar las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p52" value="1" <?php if($p52==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p52" value="0" <?php if($p52==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p53" class="radio">53. Pienso que debemos llegar directamente al grano, al meollo de las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p53" value="1" <?php if($p53==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p53" value="0" <?php if($p53==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p54" class="radio">54. Siempre trato de llegar a conclusiones e ideas claras. </label>
      <div class="respuestas">
        <input type="radio" name="p54" value="1" <?php if($p54==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p54" value="0" <?php if($p54==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p55" class="radio">55. Prefiero discutir cuestiones concretas y no perder el tiempo con pláticas sin sentido. </label>
      <div class="respuestas">
        <input type="radio" name="p55" value="1" <?php if($p55==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p55" value="0" <?php if($p55==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p56" class="radio">56. Me impaciento cuando me dan explicaciones irrelevantes e incoherentes. </label>
      <div class="respuestas">
        <input type="radio" name="p56" value="1" <?php if($p56==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p56" value="0" <?php if($p56==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p57" class="radio">57. Compruebo antes si las cosas funcionan realmente. </label>
      <div class="respuestas">
        <input type="radio" name="p57" value="1" <?php if($p57==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p57" value="0" <?php if($p57==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p58" class="radio">58. Hago varios borradores antes de la redacción definitiva de un trabajo. </label>
      <div class="respuestas">
        <input type="radio" name="p58" value="1" <?php if($p58==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p58" value="0" <?php if($p58==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p59" class="radio">59. Soy consciente de que en las discusiones ayudo a mantener a los demás centrados en el tema, evitando divagaciones. </label>
      <div class="respuestas">
        <input type="radio" name="p59" value="1" <?php if($p59==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p59" value="0" <?php if($p59==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p60" class="radio">60. Observo que, con frecuencia, soy uno(a) de los(a) más objetivos(as) y desapasionados(as) en las discusiones. </label>
      <div class="respuestas">
        <input type="radio" name="p60" value="1" <?php if($p60==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p60" value="0" <?php if($p60==0){ echo 'checked="checked"';  } ?> />
        No </div>
		
		<br />
      <div class="btnresp" style="margin-top:420px">
      <center><div class="medium default btn"><input  name="enviar6" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php
		
		/* formulario 6 fin */
	}else if($rguardadas==60){	
		/* formulario 7 inicio */
		
		?>
		<form action="#x" method="post" id="miform">
		
	<label for="p61" class="radio">61. Cuando algo va mal, le resto importancia e intento hacerlo mejor. </label>
      <div class="respuestas">
        <input type="radio" name="p61" value="1" <?php if($p61==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p61" value="0" <?php if($p61==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p62" class="radio">62. Rechazo ideas originales y espontáneas si no las considero prácticas. </label>
      <div class="respuestas">
        <input type="radio" name="p62" value="1" <?php if($p62==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p62" value="0" <?php if($p62==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p63" class="radio">63. Me gusta deliberar entre diversas alternativas antes tomar una decisión. </label>
      <div class="respuestas">
        <input type="radio" name="p63" value="1" <?php if($p63==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p63" value="0" <?php if($p63==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p64" class="radio">64. Con frecuencia pienso en el futuro para preverlo. </label>
      <div class="respuestas">
        <input type="radio" name="p64" value="1" <?php if($p64==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p64" value="0" <?php if($p64==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p65" class="radio">65. En los debates y discusiones prefiero desempeñar un papel secundario antes que ser  el (la) líder o el(la) que más participa. </label>
      <div class="respuestas">
        <input type="radio" name="p65" value="1" <?php if($p65==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p65" value="0" <?php if($p65==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p66" class="radio">66. Me molestan las personas que no actúan con lógica. </label>
      <div class="respuestas">
        <input type="radio" name="p66" value="1" <?php if($p66==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p66" value="0" <?php if($p66==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p67" class="radio">67. Me resulta incómodo tener que planificar y prever las cosas. </label>
      <div class="respuestas">
        <input type="radio" name="p67" value="1" <?php if($p67==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p67" value="0" <?php if($p67==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p68" class="radio">68. Creo que el fin justifica los medios en muchos casos. </label>
      <div class="respuestas">
        <input type="radio" name="p68" value="1" <?php if($p68==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p68" value="0" <?php if($p68==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p69" class="radio">69. Suelo reflexionar sobre los asuntos y problemas. </label>
      <div class="respuestas">
        <input type="radio" name="p69" value="1" <?php if($p69==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p69" value="0" <?php if($p69==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p70" class="radio">70. Trabajar a conciencia me llena de satisfacción y orgullo. </label>
      <div class="respuestas">
        <input type="radio" name="p70" value="1" <?php if($p70==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p70" value="0" <?php if($p70==0){ echo 'checked="checked"';  } ?> />
        No </div>
		
		<br />
      <div class="btnresp" style="margin-top:420px">
      <center><div class="medium default btn"><input  name="enviar7" type="submit" value="siguiente" /></div></center>
       </div>
    </form>
		<?php
			/* formulario 7 fin */
			}else if($rguardadas==70){	
				/* formulario 8 inicio */			
		?>
		
		<form action="#x" method="post" id="miform">
		
	<label for="p71" class="radio">71. Ante los hechos trato de descubrir los principios y teorías en que se basan. </label>
      <div class="respuestas">
        <input type="radio" name="p71" value="1" <?php if($p71==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p71" value="0" <?php if($p71==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p72" class="radio">72. Con tal de conseguir el objetivo que pretendo, soy capaz de herir sentimientos ajenos. </label>
      <div class="respuestas">
        <input type="radio" name="p72" value="1" <?php if($p72==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p72" value="0" <?php if($p72==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p73" class="radio">73. No me importa hacer todo lo necesario para que sea efectivo mi trabajo. </label>
      <div class="respuestas">
        <input type="radio" name="p73" value="1" <?php if($p73==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p73" value="0" <?php if($p73==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p74" class="radio">74. Con frecuencia soy una de las personas que más anima las fiestas. </label>
      <div class="respuestas">
        <input type="radio" name="p74" value="1" <?php if($p74==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p74" value="0" <?php if($p74==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p75" class="radio">75. Me aburro enseguida con el trabajo metódico y minucioso. </label>
      <div class="respuestas">
        <input type="radio" name="p75" value="1" <?php if($p75==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p75" value="0" <?php if($p75==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p76" class="radio">76. La gente a menudo cree que soy poco sensible a sus sentimientos. </label>
      <div class="respuestas">
        <input type="radio" name="p76" value="1" <?php if($p76==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p76" value="0" <?php if($p76==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p77" class="radio">77. Suelo dejarme llevar por la intuición. </label>
      <div class="respuestas">
        <input type="radio" name="p77" value="1" <?php if($p77==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p77" value="0" <?php if($p77==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p78" class="radio">78. Si trabajo en equipo procuro que se siga un método y un orden. </label>
      <div class="respuestas">
        <input type="radio" name="p78" value="1" <?php if($p78==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p78" value="0" <?php if($p78==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p79" class="radio">79. Usualmente me interesa averiguar lo que piensa la gente. </label>
      <div class="respuestas">
        <input type="radio" name="p79" value="1" <?php if($p79==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p79" value="0" <?php if($p79==0){ echo 'checked="checked"';  } ?> />
        No </div>
      <label for="p80" class="radio">80. Evito los temas subjetivos, ambiguos y poco claros. </label>
      <div class="respuestas">
        <input type="radio" name="p80" value="1" <?php if($p80==1){ echo 'checked="checked"';  } ?> />
        Sí
        <input type="radio" name="p80" value="0" <?php if($p80==0){ echo 'checked="checked"';  } ?> />
        No </div>
		
		<br />
      <div class="btnresp" style="margin-top:420px">
      <center><div class="medium default btn"><input  name="enviar8" type="submit" value="Terminar" /></div></center>
       </div>
    </form>		
	
	<?php
		
		/* formulario 8 fin */
	}else if($rguardadas==80){
		/*aqui va la retro alimentacion */
		
		
		$sql_recupera="SELECT id, fecha, activo, reflexivo, teorico, pragmatico FROM 80Preguntas WHERE id='$numcta' LIMIT 1;"; 
		$rs_01=$conexion->consulta($sql_recupera);
		$total_rs_01 = mysql_num_rows($rs_01);  
		while ($reg_01 = mysql_fetch_array($rs_01, MYSQL_ASSOC))  
		{  
			$porciento_activo=$reg_01['activo'];
			$porciento_reflexivo=$reg_01['reflexivo'];
			$porciento_teorico=$reg_01['teorico'];
			$porciento_pragmatico=$reg_01['pragmatico'];
			
			
			?>
	
			 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Estilo', 'Porcentaje'],
          ['Activo',     <?php echo $porciento_activo;?>],
          ['Reflexivo',     <?php echo $porciento_reflexivo;?>],
          ['Teórico',  <?php echo $porciento_teorico;?>],
          ['Pragmático', <?php echo $porciento_pragmatico;?>]
        ]);

        var options = {
          title: 'Estilos de aprendizaje'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	<center>
	<div id="chart_div" style="width: 600px; height: 500px;"></div>
	</center>
			<?php
			
			$estilos=array("activo"=>$porciento_activo, "reflexivo"=>$porciento_reflexivo, "teorico"=>$porciento_teorico,"pragmatico"=>$porciento_pragmatico );
			arsort($estilos);
			$cont1=0;
			$maximo=0;
			
			$bandera_activo=false;
			$bandera_reflexivo=false;
			$bandera_teorico=false;
			$bandera_pragmatico=false;
			
			foreach ($estilos as $clave => $valor) {
				
				if($cont1==0){
					$maximo=$valor;
					//echo $clave."<br>";//PENDIENTE poner mensaje segun seccion
					$bandera_activar="bandera_".$clave;
					$$bandera_activar=true;
				}else{
					if(($maximo-$valor)<=5.0){
						//echo $clave."<br>";//PENDIENTE poner mensaje segun seccion
						$bandera_activar="bandera_".$clave;
						$$bandera_activar=true;
					}
				}
				$cont1++;
			}
			
			if($bandera_activo){
				?>
				
				<h3>Alumnos Activos</h3>
    <table class="striped rounded">
      <thead>
        <tr>
          <th><p class="resb1">Características generales</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <ul><ul>
            <ul style="list-style-image:url(../img/tic.png)">
              <li><p>Les gusta vivir nuevas experiencias.</p></li>
              <li><p>Suelen ser entusiastas ante nuevas tareas.</p></li>
              <li><p>Tienen sus días llenos de actividades, y tan pronto vayan disminuyendo buscan otras.</p></li>
              <li><p>Les aburre ocuparse de planes a largo plazo.</p></li>
              <li><p>Les gusta trabajar en equipo, pero siendo el líder.</p></li>
            </ul>
            </ul></ul>
            <p class="resb2">La pregunta que quieren responder con el aprendizaje es ¿Cómo?</p>
          </td>
        </tr>
        <tr>
          <th><p class="resb1">Características principales</p></th>
        </tr>
        <tr>
          <td><p>Improvisador, descubridor, arriesgado, espontáneo, creativo, innovador, inventor, generador de ideas, líder, participativo, competitivo, deseoso de aprender y solucionador de problemas.</p></td>
        </tr>
         <tr>
          <th><p class="resb1">Aprenden mejor y peor cuando...</p></th>
        </tr>
         <tr>
          <td>
            <table class="striped rounded">
              <thead>
                <tr>
                  <th style="background:#FFD9EC" ><p class="resb2">Mejor</p></th>
                  <th style="background:#FFD9EC" ><p class="resb2">Peor</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Intentan nuevas experiencias.</p></li>
                      <li><p>Realizan actividades cortas de resultado inmediato.</p></li>
                      <li><p>Generan ideas.</p></li>
                      <li><p>Trabajan en equipo.</p></li>
                      <li><p>Dirigen debates.</p></li>
                      <li><p>Hacen presentaciones.</p></li>
                      <li><p>Realizan actividades actuales.</p></li>
                      <li><p>Aprende algo nuevo que no sabía.</p></li>
                      <li><p>No tiene que escuchar sentado una hora seguida.</p></li>
                    </ul></ul></ul>
                  </td>
                  <td>
                    <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Tienen que adoptar un papel pasivo.</p></li>
                      <li><p>Interpretan y analizan datos.</p></li>
                      <li><p>Trabajan, leen, escriben y piensan solos.</p></li>
                      <li><p>Exponen temas muy teóricos (explicar causas, antecedentes, etc.)</p></li>
                      <li><p>Repetir la misma actividad.</p></li>
                      <li><p>Tienen que seguir instrucciones.</p></li>
                      <li><p>Analizar e interpretar gran cantidad de datos.</p></li>
                    </ul></ul></ul>
                  </td>
                </tr>
              </tbody>
            </table>    
          </td>
        </tr>
      </tbody>
    </table>
				
				<?php
			}
			if($bandera_reflexivo){
				?>
				
				<h3>Alumnos reflexivos</h3>
    <table class="striped rounded">
      <thead>
        <tr>
          <th ><p class="resb1">Características generales</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
              <li><p>Son observadores.</p></li>
              <li><p>Analizan sus experiencias desde diversas perspectivas antes de llegar a una conclusión. </p></li>
              <li><p>Son precavidos y analizan todas las alternativas posibles antes de ponerse en movimiento.</p></li>
              <li><p>En las reuniones observan y escuchan antes de hablar.</p> </li>
            </ul></ul></ul>
            <p class="resb2">La pregunta que quiere responder con el aprendizaje es ¿Por qué?</p>
          </td>
        </tr>
        <tr>
          <th><p class="resb1">Características principales</p></th>
        </tr>
        <tr>
          <td><p>Receptivo, analítico, observador, paciente, cuidadoso, detallista, previsor de alternativas, investigador, recopilador, registrador de datos, elaborador de argumentos y prudente.</p></td>
        </tr>
         <tr>
          <th>Aprenden mejor y peor cuando…</th>
        </tr>
         <tr>
          <td>
            <table class="striped rounded">
              <thead>
                <tr>
                  <th style="background:#FFD9EC" ><p class="resb2">Mejor</p></th>
                  <th style="background:#FFD9EC" ><p class="resb2">Peor</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Adoptan la postura de observador.</p></li>
                      <li><p>Analizan la situación.</p></li>
                      <li><p>Piensan antes de actuar.</p></li>
                      <li><p>Intercambian opiniones.</p></li>
                      <li><p>Trabajan sin presiones.</p></li>
                      <li><p>Investigan con detenimiento.</p></li>
                      <li><p>Sondean para llegar al fondo de las cuestiones.</p></li>
                      <li><p>Escuchan y asimilan antes de comentar.</p></li>
                      <li><p>Hacen análisis detallados.</p></li>
                    </ul></ul></ul>
                  </td>
                  <td>
                    <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Participan sin poder planificar previamente.</p></li>
                      <li><p>Actúan como líder o representa algún rol.</p></li>
                      <li><p>No tienen datos suficientes para sacar una conclusión.</p></li>
                      <li><p>Están obligados a pasar rápidamente de una actividad a otra.</p></li>
                      <li><p>Hacen un trabajo superficialmente.</li>
                    </ul></ul></ul>
                  </td>
                </tr>
              </tbody>
            </table>    
          </td>
        </tr>
      </tbody>
    </table>
				
				<?php
			}
			if($bandera_teorico){
				?>
				<h3>Alumnos Teóricos</h3>
    <table class="striped rounded">
      <thead>
        <tr>
          <th><p class="resb2">Características generales</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
              <li><p>Adaptan e integran las observaciones que realizan en teorías complejas y bien fundamentadas lógicamente.</p> </li>
              <li><p>Piensan de forma secuencial y paso a paso.</p> </li>
              <li><p>Analizan y sintetizan la información.</p></li>
              <li><p>Buscan la racionalidad y la objetividad. </p></li>
              <li><p>Son profundos en su sistema de pensamiento cuando establecen principios, teorías y modelos. </p></li>
              <li><p>Aprenden a ser perfeccionistas.</p> </li>
            </ul>
             </ul>
              </ul>
            <p class="resb2">La pregunta que quieren responder con el aprendizaje es ¿Qué?</p>
          </td>
        </tr>
        <tr>
          <th><p class="resb1">Características principales</th>
        </tr>
        <tr>
          <td><p>Disciplinado, metódico, objetivo, crítico, sistemático, ordenado, razonador, perfeccionista, buscador de hipótesis, teorías, preguntas, conceptos, inventor de procedimientos y explorador. </p></td>
        </tr>
         <tr>
          <th><p class="resb1">Aprenden mejor y peor cuando...</p></th>
        </tr>
         <tr>
          <td>
            <table class="striped rounded">
              <thead>
                <tr>
                  <th style="background:#FFD9EC" ><p class="resb2">Mejor</p></th>
                  <th style="background:#FFD9EC" ><p class="resb2">Peor</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Participan en una sesión de preguntas y respuestas.</p></li>
                      <li><p>Ponen a prueba métodos que sean la base de algo.</p></li>
                      <li><p>Participan en situaciones complejas.</p></li>
                      <li><p>Analizan y después generalizan la situación.</p></li>
                      <li><p>Entienden acontecimientos complicados.</p></li>
                      <li><p>Encuentran ideas complejas.</p></li>
                      <li><p>Están con personas del mismo nivel conceptual.</p></li>
                    </ul></ul></ul>
                  </td>
                  <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Tienen que decidir sin un fundamento teórico.</p></li>
                      <li><p>Tienen que participar en situaciones donde predominan emociones y sentimientos.</p></li>
                      <li><p>Participan en actividades no estructuradas.</p></li>
                      <li><p>Tienen que actuar o decidir sin una base de principios.</p></li>
                      <li><p>Improvisan.</li>
                      <li><p>Consideran que el tema es insignificante, poco profundo o superficial.</p></li>
                      <li><p>Se sienten desconectados de los demás participantes porque tienen estilos diferentes o los consideran intelectualmente inferiores.</p></li>
                    </ul></ul></ul>
                  </td>
                </tr>
              </tbody>
            </table>    
          </td>
        </tr>
      </tbody>
    </table>
				<?php
			}
			if($bandera_pragmatico){
				?>
				
				<h3>Alumnos Pragmáticos</h3>
    <table class="striped rounded">
      <thead>
        <tr>
          <th><p class="resb2">Características generales</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
              <li><p>Les gusta probar ideas, teorías y técnicas nuevas, para comprobar si funcionan en la práctica.</p></li> 
              <li><p>Buscan ideas y las ponen en práctica.</p> </li>
              <li><p>Les aburren e impacientan las discusiones largas sobre una misma idea.</p></li>
              <li><p>Son gente práctica apegada a la realidad.</p></li>
              <li><p>Siempre están buscando una manera mejor de hacer las cosas.</p></li>
              <li><p>Actúan rápidamente y con seguridad en los proyectos que les atraen.</p> </li>
              <li><p>Les gusta tomar decisiones y resolver problemas.</p></li>
            </ul></ul></ul>
            <p class="resb2">La pregunta que quieren responder con el aprendizaje es ¿Qué pasaría si…?</p>
          </td>
        </tr>
        <tr>
          <th><p class="resb2">Características principales</p></th>
        </tr>
        <tr>
          <td><p>Práctico, eficaz, experimentador, realista, útil, rápido, decidido, positivo, planificador, concreto, objetivo, seguro de sí, organizado, solucionador de problemas, aplicador de lo aprendido y planificador de acciones.</p></td>
        </tr>
         <tr>
          <th><p class="resb1">Aprenden mejor y peor cuando…</p></th>
        </tr>
         <tr>
          <td>
            <table class="striped rounded">
              <thead>
                <tr>
                  <th style="background:#FFD9EC" ><p class="resb2">Mejor</p></th>
                  <th style="background:#FFD9EC" ><p class="resb2">Peor</p></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Las actividades relacionan la teoría y la práctica.</p></li>
                      <li><p>Ponen en práctica inmediatamente lo que han aprendido.</p></li>
                      <li><p>Se concentran en situaciones prácticas.</p></li>
                      <li><p>Reciben indicaciones prácticas y técnicas.</p></li>
                      <li><p>Aprenden técnicas que aplican en su trabajo.</p></li>
                      <li><p>Elaboran planes de acción.</p></li>
                      <li><p>Pueden experimentar con técnicas con asesoramiento de algún experto.</p></li>
                      <li><p>Ven films que muestran como se hacen las cosas.</p></li>
                    </ul></ul></ul>
                  </td>
                  <td>
          <ul><ul><ul style="list-style-image:url(../img/tic.png)">
                      <li><p>Lo que aprenden no se relacionado con sus necesidades y con la realidad.</p></li>
                      <li><p>Aprenden teorías y principios generales.</p></li>
                      <li><p>Trabajan sin instrucciones claras sobre cómo hacerlo.</p></li>
                    </ul></ul></ul>
                  </td>
                </tr>
              </tbody>
            </table>    
          </td>
        </tr>
      </tbody>
    </table>
				
				<?php
			}
		
		}
		
		$sql_borra="UPDATE 80Preguntas SET rguardadas=0 WHERE id='$numcta' LIMIT 1;"; 
		$conexion->consulta($sql_borra);
		
		
		
	}
	
	?>
	

<p>&nbsp;</p>
    <p class="subtitulo">Recuerda que… </p>
    <p>Nuestra manera de aprender cambia y    evoluciona constantemente, como nosotros mismos. Por lo tanto, aunque te    identifiques con un estilo específico de aprendizaje, considera que existen    otros en los que también te puedes apoyar. </p>
                                                                <center> <span class="resb2"> Ahora descubre qué son    estrategias de aprendizaje.</span> </center>
<p>&nbsp;</p>
<!-- Navegacion --> 
        
    <div class="naveg">
      <div class="ant"> <a href="../bloque2/b2_02.php">anterior</a></div>
      <div class="sig"> <a href="../bloque2/b2_04.php">siguiente</a> </div>
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
<?php $conexion->desconectar(); ?>