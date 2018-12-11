<?php 	

	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/Rutinas/RutinaE.php';
	require_once '../../modelo/Rutinas/RutinaM.php';

	$retorno = array('array', 'mensaje', 'estado');

	error_reporting(1);

	$RutinaE = new RutinaE();
	$RutinaE->setIdRutina($_POST['id']);

	$RutinaM = new RutinaM();
	$resultado = $RutinaM->ReadRutinaModal($RutinaE->getIdRutina());

	$retorno['array'] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
	$retorno['mensaje'] = $resultado->mensaje;
	//$retorno['estado'] = $resultado->estado;

	unset($RutinaE);
	unset($RutinaM);

	echo json_encode($retorno);
 ?>