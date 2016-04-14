<?php
	require_once("../logica.php");
	$conexion=new conexion();
	
	$sistema=new logica();
	$idUsuario=$sistema->getAlumno();
	$tipo=$sistema->getTipoUsuario();
	
	$p1=$sistema->recuperaPOST2("p1","0");
	$p2=$sistema->recuperaPOST2("p2","0");
	$isbn=$sistema->recuperaPOST2("isbn","0");
	$isbn=strtoupper($isbn);
	$isbn="-".trim($isbn);
	
	
	$pos1 = strpos($isbn, "PQ7297.P21B37");
	$pos2 = strpos($isbn, "PQ7297.F85A813");
	$pos3 = strpos($isbn, "PQ8180.17A73A55");
$mensaje1="";
$correcto1=false;



if($pos1>0||$pos2>0||$pos3>0){
//
	$correcto1=true;
	//echo "linea 28";
}	
	if($p1=="0"||$p2=="0"||$isbn=="0"){
		$mensaje1="<font color='#FF0000'>Falt&oacute; contestar uno o m&aacute;s campos</font><br> ";
		
	}else{
		if($correcto1){
			$conexion->conectar();
			$sql_guardar="insert into cuestionario_b2_08_1(id_alumno,tipo_usuario,fecha_hora,p1, p2) values ('$idUsuario',$tipo,NOW(),$p1, $p2)";
			$conexion->ejecutar($sql_guardar);
			$conexion->desconectar();
		}
	}
	require_once("b2_08.php");
?>	