<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/SedeM.php';
	require_once '../Entidad/sedeE.php';


	$retorno = array('mensaje','arraySede');
	$sedeE=new SedeE();
	
	$sedeM = new SedeM();
	$resultado = $sedeM->consultar();
	$retorno["arraySede"] = $resultado->datos->fetchAll();

	unset($sedeM);
	unset($sedeE);
	echo json_encode($retorno);
?>