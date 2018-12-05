<?php 
	
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlCrearRutina.php';

	$retorno = array();

	$mdlCrearRutina = new mdlCrearRutina();
	$resultado = $mdlCrearRutina->consultarEjercicios();

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($retorno);

 ?>