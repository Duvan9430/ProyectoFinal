<?php 

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/ConsultarRutinas.php';

error_reporting(1);
	$retorno = array();
	$modelos = new RutinasAprendiz();

	$resultado2 = $modelos->ConsultarPiernas();
	$retorno = $resultado2->datos2->fetchAll();

	echo json_encode($retorno);

 ?>