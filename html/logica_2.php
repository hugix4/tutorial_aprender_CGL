<?php
session_start();
require_once("conexion.php");
/*
$conexion=new conexion();
$conexion->conectar();
$rs_01=$conexion->ejecutar("SELECT * FROM enunciado");
$total_rs_01 = mysql_num_rows($rs_01);  
while ($reg_01 = mysql_fetch_array($rs_01, MYSQL_ASSOC))  
{  
    $id_enunciado = $reg_01['id_enunciado'];  
    $enunciado = $reg_01['enunciado'];  
    echo " $id_enunciado ($enunciado) <br />";  
}
$conexion->desconectar();
*/

class logica{
	
	var $nombre_sistema="tutorial_cch";
	
	function bitacora($archivo,$modulo=0){
		if($this->verificarLogin()){
			if($_SESSION[$this->nombre_sistema."tipo"]==1){/* si es estudiante se registra su actividad*/
				$conexion=new conexion();
				$conexion->conectar();
				$numcta=$this->getAlumno();
				$sql_bitacora="INSERT INTO bitacora( id_alumno, pagina, fechayhora, modulo) VALUES( '$numcta', '$archivo' , NOW(), $modulo);";
				$conexion->ejecutar($sql_bitacora);
				$sql_actualiza="UPDATE alumnos SET alumnos.b0_00=1 WHERE alumnos.id_alumno=$numcta;";
				if($archivo=="/tutorial.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b0_00=1 WHERE alumnos.id_alumno=$numcta;";
				}else if($archivo=="bloque1/b1_00.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_00=1 WHERE alumnos.id_alumno=$numcta;";
				}else if($archivo=="bloque1/b1_01.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_01=1 WHERE alumnos.id_alumno=$numcta;";
				}else if($archivo=="bloque1/b1_02.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_02=1 WHERE alumnos.id_alumno=$numcta;";
				}else if($archivo=="bloque1/b1_03.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_03=1 WHERE alumnos.id_alumno=$numcta;";
				}
				$conexion->ejecutar($sql_actualiza);
				
				$conexion->desconectar();
			}
			if($_SESSION[$this->nombre_sistema."tipo"]==2){/* si es estudiante se registra su actividad*/
				$conexion=new conexion();
				$conexion->conectar();
				$numcta=$this->getAlumno();
				$sql_bitacora="INSERT INTO bitacora_profesores( id_alumno, pagina, fechayhora, modulo) VALUES( '$numcta', '$archivo' , NOW(), $modulo);";
				$conexion->ejecutar($sql_bitacora);
				$conexion->desconectar();
			}
		}else{
			header('Location: ../index.php');
		}
	}
	
	function getAlumno(){
		return $_SESSION[$this->nombre_sistema."numcta"];
	}
	
	/*
	funcion para saber el tipo de usuario
	regresa 1 si es estudiante
	regresa 2 si es profesor
	*/
	function getTipoUsuario(){
		return $_SESSION[$this->nombre_sistema."tipo"];
	}
	
	function iniciar_sesion($numcta, $tipo=1){
		$_SESSION[$this->nombre_sistema]=1;
		$_SESSION[$this->nombre_sistema."numcta"]=$numcta;
		$_SESSION[$this->nombre_sistema."tiempo"]=time();
		$_SESSION[$this->nombre_sistema."tipo"]=$tipo;
	}
	
	function terminar_sesion(){
		$_SESSION[$this->nombre_sistema]=0;
		$_SESSION[$this->nombre_sistema."numcta"]=0;
		$_SESSION[$this->nombre_sistema."tiempo"]=0;
		$_SESSION[$this->nombre_sistema."tipo"]=0;
	}
	
	function verificarLogin(){
		if(isset($_SESSION[$this->nombre_sistema])){
			if($_SESSION[$this->nombre_sistema]==1){
				$vida_session = time() - $_SESSION[$this->nombre_sistema."tiempo"];
				$inactivo=30*60;/*minutos tolerancia * 60 seg */
				if($vida_session > $inactivo)
				{
					return false;
				}else{
					$_SESSION[$this->nombre_sistema."tiempo"]=time();
					return true;
				}	
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
	
	function validaFecha($ano, $mes, $dia){
		$respuesta=0;
		if($mes==2){
			if(($ano%4)==0){
				$tolerancia=29;
			}else{
				$tolerancia=28;
			}
		}else if($mes==4||$mes==6||$mes==9||$mes==11){
			$tolerancia=30;
		}else{
			$tolerancia=31;
		}

		if($dia<=$tolerancia){
			$respuesta=1;
		}else{
			//echo "Fecha inv&aacute;lida: $ano-$mes-$dia. Por favor introduzca una fecha v&aacute;lida.";
			//die();//fecha invalida;
		}
		return $respuesta;
	}
	
	function recuperaGET($varible, $aviso="No se pudo recuperar una varible metodo GET"){
		if(isset($_GET[$varible])){
			if($_GET[$varible]!=""){
				return $_GET[$varible];
			}else{
				$mensaje="<font color='#FF0000'>$aviso</font><br> ";
				include("index.php");
				die();
				//die($aviso);
			}
		}else{
			//die($aviso);
			$mensaje="<font color='#FF0000'>$aviso</font><br> ";
			include("index.php");
			die();
		}
	}
	
	function recuperaPOST($varible, $aviso="No se pudo recuperar una varible metodo POST"){
		if(isset($_POST[$varible])){
			if($_POST[$varible]!=""){
				return $_POST[$varible];
			}else{
				//die($aviso);
				$mensaje="<font color='#FF0000'>$aviso</font><br> ";
				include("index.php");
				die();
			}
		}else{
			$mensaje="<font color='#FF0000'>$aviso</font><br> ";
			include("index.php");
			die();
			//die($aviso);
		}
	}

	function recuperaPOST2($varible, $default=""){
		if(isset($_POST[$varible])){
			if($_POST[$varible]!=""){
				return $_POST[$varible];
			}else{
				return $default;
			}
		}else{
			return $default;
		}
	}
}

?>