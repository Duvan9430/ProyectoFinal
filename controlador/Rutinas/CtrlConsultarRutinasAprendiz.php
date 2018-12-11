<?php 

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/ConsultarRutinas.php';

error_reporting(1);
	$retorno = array();
	$modelos = new RutinasAprendiz();

	$resultado = $modelos->ConsultarAprendizRutina();
	$retorno = $resultado->datos->fetchAll();

	echo json_encode($retorno);

 ?>