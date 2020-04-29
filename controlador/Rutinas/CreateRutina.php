<?php 	

<<<<<<< HEAD
	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/Rutinas/RutinaE.php';
	require_once '../../modelo/Rutinas/RutinaM.php';
=======
	require_once '../Modelo/Conexion.php';
	require_once '../Entidad/RutinaE.php';
	require_once '../Modelo/RutinaM.php';
>>>>>>> 64b733801de0c4a466f660d5af4ff998e0441df5

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