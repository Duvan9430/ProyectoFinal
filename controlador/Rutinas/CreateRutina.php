<?php 	

	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/Rutinas/RutinaE.php';
	require_once '../../modelo/Rutinas/RutinaM.php';

	$retorno = array('array', 'mensaje', 'estado');

	error_reporting(1);

	$RutinaE = new RutinaE();
	$RutinaE->setIdClasificacion($_POST['idClasificacionRutina']);
	$RutinaE->setRutNombre($_POST['rutNombre']);

	$RutinaM = new RutinaM();
	$resultado = $RutinaM->CreateRutina($RutinaE);

	$retorno['array'] = $resultado->datos;
	$retorno['mensaje'] = $resultado->mensaje;
	$retorno['estado'] = $resultado->estado;

	unset($RutinaE);
	unset($RutinaM);

	echo json_encode($retorno);
 ?>