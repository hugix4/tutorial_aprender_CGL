<?php
require_once("logica.php");

$conexion=new conexion();
$conexion->conectar();
$sistema=new logica();
$numcta=$sistema->getAlumno();
$sql_bitacora_previa="SELECT COUNT( bitacora.id_bitacora) as pag_visitadas FROM bitacora WHERE bitacora.modulo>0 AND bitacora.id_alumno=$numcta;";
$pag_visitadas=$conexion->getdb($sql_bitacora_previa,"pag_visitadas");
if($pag_visitadas>0){
//IR A LA ULTIMA PAGINA
	$sql_ultima_pag="SELECT bitacora.pagina FROM bitacora WHERE bitacora.`id_alumno`='$numcta' ORDER BY bitacora.`fechayhora` DESC LIMIT 1;"; 
	$ultima_pag=$conexion->getdb($sql_ultima_pag,"pagina");
	header("Location: $ultima_pag");
}else{
//IR A PAGINA INICIAL
header('Location: ./tutorial.php');
}

$conexion->desconectar();
?>