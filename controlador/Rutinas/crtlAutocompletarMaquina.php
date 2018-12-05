<?php 
	
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlGenerarReportes.php';


	$retorno= array();

	$mldReportes = new mdlGenerarReportes();

	$resultado= $mldReportes->autocompletarMaquina($_POST["selectMaquina"]);

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_NUM);

	echo json_encode($retorno);



 ?>