<?php 

	require_once "../../modelo/Conexion.php";
	require_once ".../../modelo/Rutinas/IngresoGimnasioM.php";

	error_reporting(0);

	$retorno = array('array' => null, 'estado' => null, 'mensaje' => null,);

	$mdlPersona = new IngresoGimnasioM();

	$resultado = $mdlPersona->consultarIdentificacion();

	$retorno['array'] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
	$retorno['estado'] = $resultado->estado;
	$retorno['mensaje'] = $resultado->mensaje;

	unset($mdlPersona);

	echo json_encode($retorno);
 ?>