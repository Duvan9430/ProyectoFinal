<?php 

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/ConsultarRutinas.php';

error_reporting(1);
	$retorno = array();
	$modelos = new RutinasAprendiz();

	$resultado1 = $modelos->ConsultarEspaLda();
	$retorno = $resultado1->datos1->fetchAll();

	echo json_encode($retorno);

 ?>