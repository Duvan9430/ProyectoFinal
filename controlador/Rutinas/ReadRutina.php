<?php 	

	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/RutinasM.php';

	$retorno = array('array', 'mensaje', 'estado');

	error_reporting(1);

	$RutinaM = new RutinaM();
	$resultado = $RutinaM->ReadRutina();

	$retorno['array'] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
	$retorno['mensaje'] = $resultado->mensaje;
	$retorno['estado'] = $resultado->estado;

	unset($RutinaE);
	unset($RutinaM);

	echo json_encode($retorno);
 ?>