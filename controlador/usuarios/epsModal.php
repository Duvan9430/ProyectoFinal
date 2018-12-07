<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/epsM.php';
	require_once '../Entidad/epsE.php';


	$retorno = array('mensaje','arrayEpsModal');
	$epsE=new EpsE();
	
	$epsM = new EpsM();
	$resultado = $epsM->consultarModal();
	$retorno["arrayEpsModal"] = $resultado->datos->fetchAll();

	unset($epsM);
	unset($epsE);
	echo json_encode($retorno);
?>