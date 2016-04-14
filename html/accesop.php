<?php
	require_once("./conexion2.php");
	require_once("./conexion.php");
	require_once("./logica.php");
	$sistema=new logica();
	$rfc=$sistema->recuperaPOST("rfc", "RFC es requerido.");
	$rfc=trim($rfc);
	$rfc=strtoupper($rfc); 
	if((strlen(trim($rfc))!=10)&&(strlen(trim($rfc))!=13)){
		$mensaje="<font color='#FF0000'>El rfc no est&aacute; completo.</font><br> ";
		include("index.php");
		die();
	}
	
	$sql_usuario_especial_existe="SELECT COUNT( usuarios_especiales.id_usuario ) AS 'registros' FROM usuarios_especiales WHERE md5( usuarios_especiales.usuario ) = md5('$rfc') LIMIT 1;"; 
	$conexionMysql=new conexion();
	$conexionMysql->conectar();
	$registros=$conexionMysql->getdb($sql_usuario_especial_existe,"registros");
	if($registros>0){
			$sistema->iniciar_sesion($rfc,3);
			header('Location: tutorial.php');
	
	}else{
		
		$sql_profesor_existe="SELECT top 1 count(dbo.Profesores.RFC) as rfc FROM dbo.Profesores where RFC like '$rfc%'";
		$conexion=new conexion2();
		$conexion->conectar("sh2005");
		$existeP=$conexion->getdb($sql_profesor_existe,"rfc");
		if ($existeP>0){
			//echo "Existe profesor";
			$sistema->iniciar_sesion($rfc,2);
			header('Location: tutorial.php');
		}else{
			$mensaje="<font color='#FF0000'>No se pudo iniciar sesi&oacute;n por favor verifique que introdujo los datos correctos</font><br> ";
			include("index.php");	
		}
	}

	
?>