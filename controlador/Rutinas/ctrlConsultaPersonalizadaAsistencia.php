<?php
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlGenerarReportes.php';

	$retorno= array();

	$mldReportes = new mdlGenerarReportes();

	$resultado= $mldReportes->consultarAsistenciaPersonalizada($_POST["selectAsistencia"],$_POST["txtAsistencia"]);

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($retorno);

?>