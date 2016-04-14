<?php
class conexion{

	var $usuarioBD="xxxxx";
	var	$claveBD='xxxxxxx';	
	var	$servidorBD="132.248.122.62";
	var	$nombreBD="propedeutico_2013";
	var $enlaceBD=null;
	
	
	function conectar(){
		$respuesta=0;
		/*
		if($this->enlaceBD=mysql_pconnect($this->servidorBD,$this->usuarioBD,$this->claveBD) or trigger_error(mysql_error(),E_USER_ERROR)){
			mysql_select_db($this->nombreBD,$this->enlaceBD) or die(mysql_error());
			$respuesta=1;
		}
		*/
		if($this->enlaceBD=mysql_connect($this->servidorBD,$this->usuarioBD,$this->claveBD) or trigger_error(mysql_error(),E_USER_ERROR)){
			mysql_select_db($this->nombreBD,$this->enlaceBD) or die(mysql_error());
			$respuesta=1;
		}
		return $respuesta;
	}
	
	
	function ejecutar($sql){
		$resultado_sql=mysql_query($sql) or die(mysql_error());
		return $resultado_sql;
	}
	
	function getdb($sql, $campo){
		$rs_01=$this->ejecutar($sql);
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