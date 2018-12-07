<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/epsM.php';
	require_once '../Entidad/epsE.php';


	$retorno = array('mensaje','arrayEps');
	$epsE=new EpsE();
	
	$epsM = new EpsM();
	$resultado = $epsM->consultar();
	$retorno["arrayEps"] = $resultado->datos->fetchAll();

	unset($epsM);
	unset($epsE);
	echo json_encode($retorno);
?>