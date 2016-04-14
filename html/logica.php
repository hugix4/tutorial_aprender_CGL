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
				
				$sql_modulo="UPDATE alumnos SET modulo_0=alumnos.b0_00*100 WHERE alumnos.id_alumno=$numcta;";
				$sql_modulo1="UPDATE alumnos SET modulo_1=((alumnos.b1_00+alumnos.b1_01+alumnos.b1_02+alumnos.b1_03)/4)*100 WHERE alumnos.id_alumno=$numcta;";
				$sql_modulo2="UPDATE alumnos SET modulo_2=((alumnos.b2_00+alumnos.b2_01+alumnos.b2_02+alumnos.b2_03+alumnos.b2_04+alumnos.b2_05+alumnos.b2_06+alumnos.b2_07+alumnos.b2_08+alumnos.b2_09+alumnos.b2_10+alumnos.b2_11+alumnos.b2_12)/13)*100 WHERE alumnos.id_alumno=$numcta;";
				$sql_modulo3="UPDATE alumnos SET modulo_3=((alumnos.b3_00+alumnos.b3_01+alumnos.b3_02+alumnos.b3_03+alumnos.b3_04+alumnos.b3_05)/6)*100 WHERE alumnos.id_alumno=$numcta;";
				$sql_modulo4="UPDATE alumnos SET modulo_4=((alumnos.b4_00+alumnos.b4_01+alumnos.b4_02+alumnos.b4_03)/4)*100 WHERE alumnos.id_alumno=$numcta;";
				$sql_modulo5="UPDATE alumnos SET modulo_5=alumnos.b5_00*100 WHERE alumnos.id_alumno=$numcta;";
				
				if($archivo=="/tutorial.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b0_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo="UPDATE alumnos SET modulo_0=alumnos.b0_00*100 WHERE alumnos.id_alumno=$numcta;";
					
				}else if($archivo=="bloque1/b1_00.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo1;					
				}else if($archivo=="bloque1/b1_01.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_01=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo1;					
				}else if($archivo=="bloque1/b1_02.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_02=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo1;
				}else if($archivo=="bloque1/b1_03.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b1_03=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo1;
					
					
				}else if($archivo=="bloque2/b2_00.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_01.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_01=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_02.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_02=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_03.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_03=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_04.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_04=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_05.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_05=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_06.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_06=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_07.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_07=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_08.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_08=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_09.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_09=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_10.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_10=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_11.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_11=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
				}else if($archivo=="bloque2/b2_12.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b2_12=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo2;
					
				}else if($archivo=="bloque3/b3_00.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
				}else if($archivo=="bloque3/b3_01.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_01=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
				}else if($archivo=="bloque3/b3_02.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_02=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
				}else if($archivo=="bloque3/b3_03.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_03=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
				}else if($archivo=="bloque3/b3_04.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_04=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
				}else if($archivo=="bloque3/b3_05.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b3_05=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo3;
					
					
				}else if($archivo=="bloque4/b4_00.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b4_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo4;
				}else if($archivo=="bloque4/b4_01.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b4_01=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo4;
				}else if($archivo=="bloque4/b4_02.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b4_02=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo4;
				}else if($archivo=="bloque4/b4_03.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b4_03=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo4;
					
					
				}else if($archivo=="/cuestionario_b5.php"){
					$sql_actualiza="UPDATE alumnos SET alumnos.b5_00=1 WHERE alumnos.id_alumno=$numcta;";
					$sql_modulo=$sql_modulo5;
				}
				$conexion->ejecutar($sql_actualiza);
				
				/*en caso de un comportamiento muy lento comentar la siguiente linea */
				//$conexion->ejecutar($sql_modulo);
				
				$sql_actualiza_avance="UPDATE alumnos SET avance_global=((alumnos.b0_00+alumnos.b1_00+alumnos.b1_01+alumnos.b1_02+alumnos.b1_03+alumnos.b2_00+alumnos.b2_01+alumnos.b2_02+alumnos.b2_03+alumnos.b2_04+alumnos.b2_05+alumnos.b2_06+alumnos.b2_07+alumnos.b2_08+alumnos.b2_09+alumnos.b2_10+alumnos.b2_11+alumnos.b2_12+alumnos.b3_00+alumnos.b3_01+alumnos.b3_02+alumnos.b3_03+alumnos.b3_04+alumnos.b3_05+alumnos.b4_00+alumnos.b4_01+alumnos.b4_02+alumnos.b4_03+alumnos.b5_00)/29)*100 WHERE alumnos.id_alumno=$numcta;";
				//$conexion->ejecutar($sql_actualiza_avance);
				
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