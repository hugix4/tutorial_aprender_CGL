<?php 
class conexion{
	// Parametros a configurar para la conexion de la base de datos 
	var $hostBD = "mysql6.000webhost.com";    // Direcci�n del servidor BD 	
	var $usuarioBD = "a6831370_h";    // Usuario para acceder a la BD 
	var $claveBD = "h0lamund0";    // Clave de acceso de nuestra BD
	var $nombreBD = "a6831370_h4";    // Nombre de nuestra BD 
	var $enlaceBD=null;
	var $conexionBD=null;
	var $BD=null;

	// Fin de los parametros a configurar para la conexion de la base de datos 
	function conectar(){
	$respuesta=0;
	/*$conexionBD= mysql_connect($hostBD,$usuarioBD,$claveBD) or trigger_error(mysql_error(),E_USER_ERROR); 
    $BD = mysql_select_db("$basededatos", $conexionBD) 
    or die (mysql_error()); 
	$respuesta=1;
	return $respuesta;}*/
	
	if($this->enlaceBD = mysql_connect($this->hostBD,$this->usuarioBD,$this->claveBD) or trigger_error(mysql_error(),E_USER_ERROR)){
			mysql_select_db($this->nombreBD,$this->enlaceBD) or die(mysql_error());
			$respuesta=1;
		}
		return $respuesta;
	}
	
	function consulta($sql){
		$resultado_sql=mysql_query($sql) or die(mysql_error());
		return $resultado_sql;
	}
	
	function getdb($sql, $campo){
		$rs_01=$this->consulta($sql);
		$total_rs_01 = mysql_num_rows($rs_01);  
		$reg_01 = mysql_fetch_array($rs_01, MYSQL_ASSOC);  
		$respuesta=$reg_01[$campo];  
		return $respuesta;	
	}
	
	function desconectar(){
		mysql_close($this->enlaceBD);
	}	
}
?> 

