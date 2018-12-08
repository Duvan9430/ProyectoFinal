<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/SedeM.php';
	require_once '../../entidad/usuarios/sedeE.php';


	$retorno = array('mensaje','arraySede');
	$sedeE=new SedeE();
	
	$sedeM = new SedeM();
	$resultado = $sedeM->consultar();
	$retorno["arraySede"] = $resultado->datos->fetchAll();

	unset($sedeM);
	unset($sedeE);
	echo json_encode($retorno);
?>