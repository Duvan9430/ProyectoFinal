<?php  
	require_once'../../modelo/Eventos/conexion.php';
	require_once '../../modelo/Eventos/equipoM.php';
error_reporting(1);
$retorno = array("mensaje",'equipo');

	$equipoM = new Equipos();
	$resultado = $equipoM->readModal($_POST['idEquipo']);
	$retorno["equipo"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($equipoM);
	
	echo json_encode($retorno);
?>