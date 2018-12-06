<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/fichaM.php';
	require_once '../Entidad/fichaE.php';


	$retorno = array('mensaje','arrayFicha');
	$fichaE=new FichaE();
	
	$fichaM = new FichaM();
	$resultado = $fichaM->consultar();
	$retorno["arrayFicha"] = $resultado->datos->fetchAll();

	unset($fichaM);
	unset($fichaE);
	echo json_encode($retorno);
?>