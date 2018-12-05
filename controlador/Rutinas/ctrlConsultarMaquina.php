<?php
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlGenerarReportes.php';

	$retorno= array();

	$mdlReporte = new mdlGenerarReportes();

	$resultado= $mdlReporte->consultarMaquina();

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($retorno);

?>