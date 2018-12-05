<?php 
	
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlGenerarReportes.php';


	$retorno= array();

	$mldReportes = new mdlGenerarReportes();

	$resultado= $mldReportes->autocompletarAsistencia($_POST["selectAsistencia"]);

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_NUM);

	echo json_encode($retorno);



 ?>