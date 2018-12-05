<?php  
require_once '../../modelo/Eventos/conexion.php';
require_once '../../entidad/Eventos/lugarE.php';
require_once '../../modelo/Eventos/lugarM.php';

$retorno = array('mensaje','arrayLugar');
	$lugarE = new LugarE();

	$lugarM = new LugarM();
	$resultado = $lugarM->read();
	$retorno["arrayLugar"] = $resultado->datos->fetchAll();

	unset($lugarM);
	unset($lugarE);

	echo json_encode($retorno);
?>