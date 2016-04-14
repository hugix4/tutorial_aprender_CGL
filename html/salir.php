<?php
require_once("logica.php");
$sistema=new logica();
$sistema->terminar_sesion();
header('Location: index.php');
?>