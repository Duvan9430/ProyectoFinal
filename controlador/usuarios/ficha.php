<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/fichaM.php';
	require_once '../../entidad/usuarios/fichaE.php';


	$retorno = array('mensaje','arrayFicha');
	$fichaE=new FichaE();
	
	$fichaM = new FichaM();
	$resultado = $fichaM->Read();
	$retorno["arrayFicha"] = $resultado->datos->fetchAll();

	unset($fichaM);
	unset($fichaE);
	echo json_encode($retorno);
?>