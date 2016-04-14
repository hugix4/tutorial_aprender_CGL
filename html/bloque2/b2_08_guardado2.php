<?php
	require_once("../logica.php");
	$conexion=new conexion();
	
	$sistema=new logica();
	$idUsuario=$sistema->getAlumno();
	$tipo=$sistema->getTipoUsuario();
	
	$p1=$sistema->recuperaPOST2("p3","0");
	$p2=$sistema->recuperaPOST2("p4","0");
	$p3=$sistema->recuperaPOST2("p5","0");
	
	$mensaje2="";
	
	$tab_activa=2;

$p2=utf8_decode($p2);
$p3=utf8_decode($p3);


	if($p1=="0"||$p2=="0"||$p3=="0"){
		$mensaje2="<font color='#FF0000'>Falt&oacute; contestar uno o m&aacute;s campos</font><br> ";
		
	}else{

			$conexion->conectar();
			$sql_guardar="insert into cuestionario_b2_08_2(id_alumno,tipo_usuario,fecha_hora,p1, p2, p3) values ('$idUsuario',$tipo,NOW(),$p1, '$p2','$p3')";
			$conexion->ejecutar($sql_guardar);
			$conexion->desconectar();
	
	}
	require_once("b2_08.php");
?>	