<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlCrearRutina.php';

	$retorno = array();
	$mdlCrearRutina = new mdlCrearRutina();
	$resultado= $mdlCrearRutina->crearRutina($_POST['idClasificacionRutina'],$_POST['nombreRutina']);

	$retorno["mensaje"] = $resultado->mensaje;

	echo json_encode($retorno);

 ?>