<?php
	require_once("../logica.php");
	$conexion=new conexion();
	
	$sistema=new logica();
	$idUsuario=$sistema->getAlumno();
	$tipo=$sistema->getTipoUsuario();
	
	$p1=$sistema->recuperaPOST2("p6","0"); //sitio
	$p2=$sistema->recuperaPOST2("p7","0"); //actualizado
	$p3=$sistema->recuperaPOST2("p8","0"); //confiabilidad
	$p4=$sistema->recuperaPOST2("p9","0"); //calidad del contenido
	$p5=$sistema->recuperaPOST2("p10","0");//calidad del sitio
	
	$mensaje3="";
	
	$tab_activa=3;


	if($p1=="0"||$p2=="0"||$p3=="0"||$p4=="0"||$p5=="0"){
		$mensaje3="<font color='#FF0000'>Falt&oacute; contestar uno o m&aacute;s campos</font><br> ";
		
	}else{

			$conexion->conectar();
			$sql_guardar="insert into cuestionario_b2_08_3(id_alumno,tipo_usuario,fecha_hora,p1, p2, p3, p4, p5) values ('$idUsuario',$tipo,NOW(),$p1, $p2,$p3, $p4,$p5)";
			$conexion->ejecutar($sql_guardar);
			$conexion->desconectar();
	
	}
	require_once("b2_08.php");
?>	