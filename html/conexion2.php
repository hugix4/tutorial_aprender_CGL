<?php
	class conexion2{
		var $usuarioBD="xxxxx";
		var $claveBD='xxxxxxx';	
		var $servidorBD="132.248.122.122";
		var $enlaceBD=null;
		
		function conectar($nombreBD){
			$respuesta=0;
			if($this->enlaceBD=odbc_connect("Driver=FreeTDS;Server=$this->servidorBD;Database=$nombreBD;UID=$this->usuarioBD;PWD=$this->claveBD","","") or die("Fallo Conexi&oacute;n(".odbc_error()."): ".odbc_errormsg())){
				$respuesta=1;
			}
			return $respuesta;
		}
		
		function ejecutar($sql){
			$resultado_sql=odbc_exec($this->enlaceBD,$sql);
			return $resultado_sql;
		}
		
			
		function getdb($sql, $campo){
			$result=$this->ejecutar($sql);  
			$row = odbc_fetch_array($result, 1);  
			$respuesta=$row[$campo];  
			return $respuesta;	
		}
		
		function desconectar(){
			odbc_close($this->enlaceBD); 		
		}
		
		
		
	}

?>