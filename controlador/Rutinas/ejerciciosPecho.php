<?php

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/ejercicioXclasificacion.php';

error_reporting(1);
	$retorno = array();
	$modelos = new EjercicioXclasificacion();

	$resultado = $modelos->EjercicioPecho();
	$retorno = $resultado->datos->fetchAll();

	echo json_encode($retorno);

 ?>
