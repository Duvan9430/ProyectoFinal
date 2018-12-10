<?php

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/RutinasM.php';

error_reporting(1);
	$retorno = array();
	$modelos = new Rutina();

	$resultado = $modelos->ConsultarRutina();
	$retorno = $resultado->datos->fetchAll();

	echo json_encode($retorno);

 ?>
