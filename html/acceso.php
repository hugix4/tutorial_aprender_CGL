<?php
require_once("logica.php");

$sistema=new logica();
$numcta=$sistema->recuperaPOST("cuenta", "N&uacute;mero de cuenta es requerido.");
$numcta=trim($numcta);
if(strlen(trim($numcta))!=9){
	$mensaje="<font color='#FF0000'>El n&uacute;mero de cuenta no tiene 9 d&iacute;gitos.</font><br> ";
	include("index.php");
	die();
}
$clave=$sistema->recuperaPOST("fnac", "Fecha de nacimiento es requerida.");
/*
$ano=$sistema->recuperaPOST("ano", "Falta a&ntilde;o.");
$mes=$sistema->recuperaPOST("mes", "Falta mes.");
$dia=$sistema->recuperaPOST("dia", "Falta dia.");

if($sistema->validaFecha($ano, $mes, $dia)<1){
	$mensaje="<font color='#FF0000'>Fecha inv&aacute;lida: $ano-$mes-$dia. Por favor introduzca una fecha v&aacute;lida.</font><br> ";
	include("index.php");
	die();
}
$clave=$dia."/".$mes."/".$ano;
*/

$sql_alumno_existe="SELECT COUNT(id_alumno) as 'registros' FROM alumnos_actividades WHERE md5(id_alumno)=md5('$numcta') LIMIT 1;"; 


$conexion=new conexion();
$conexion->conectar();
$registros=$conexion->getdb($sql_alumno_existe,"registros");
if($registros>0){
	//alumno si esta en la base
	$sql_alumno_login="SELECT COUNT(id_alumno) as 'registros' FROM alumnos_actividades WHERE md5(id_alumno)=md5('$numcta') and  md5(fecha_nacimiento)=md5('$clave') LIMIT 1;"; 
	if($registros>0){
		//login correcto
		$sistema->iniciar_sesion($numcta,1);
		$conexion->ejecutar("UPDATE alumnos SET ingresos = ingresos+1 WHERE md5(id_alumno)=md5('$numcta');");
		//echo "Bienvenido";
		header('Location: ir_inicial.php');
	}else{
		//el numero de cuenta esta en BD pero la fecha es incorrecta
		$mensaje="<font color='#FF0000'>No se pudo iniciar sesi&oacute;n por favor verifique que introdujo los datos correctos</font><br> ";
		include("index.php");	
	}
	
}else{
	//alumno NO esta en la base
	$mensaje="<font color='#FF0000'>No se encontro el n&uacute;mero de cuenta en la base de datos</font><br> ";
	include("index.php");
}
$conexion->desconectar();

?>