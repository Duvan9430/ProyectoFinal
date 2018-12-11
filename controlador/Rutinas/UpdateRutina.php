<?php 	

	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/Rutinas/RutinaE.php';
	require_once '../../modelo/Rutinas/RutinaM.php';

	$retorno = array('array', 'mensaje', 'estado');

	error_reporting(0);

	$RutinaE = new RutinaE();
	$RutinaE->setIdClasificacion($_POST['idClasificacionRutinaUpdate']);
	$RutinaE->setRutNombre($_POST['rutNombreUpdate']);
	$RutinaE->setIdRutina($_POST['idRutina']);

	$RutinaM = new RutinaM();
	$resultado = $RutinaM->UpdateRutina($RutinaE);

	$retorno['array'] = $resultado->datos;
	$retorno['mensaje'] = $resultado->mensaje;
	$retorno['estado'] = $resultado->estado;

	unset($RutinaE);
	unset($RutinaM);

	echo json_encode($retorno);
 ?>