<?php 	

	require_once './../modelo/Conexion.php';
	require_once '../../entidad/Rutinas/RutinaE.php';
	require_once './../modelo/RutinaM.php';

	$retorno = array('array', 'mensaje', 'estado');

	error_reporting(1);

	$RutinaE = new RutinaE();
	$RutinaE->setIdRutina($_POST['idRutinaD']);

	$RutinaM = new RutinaM();
	$resultado = $RutinaM->DeleteRutina($RutinaE->getIdRutina());

	$retorno['array'] = $resultado->datos;
	$retorno['mensaje'] = $resultado->mensaje;
	$retorno['estado'] = $resultado->estado;

	unset($RutinaE);
	unset($RutinaM);

	echo json_encode($retorno);
 ?>