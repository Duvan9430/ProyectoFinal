<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/epsM.php';
	require_once '../../entidad/usuarios/epsE.php';


	$retorno = array('mensaje','arrayEps');
	$epsE=new EpsE();
	
	$epsM = new EpsM();
	$resultado = $epsM->consultar();
	$retorno["arrayEps"] = $resultado->datos->fetchAll();

	unset($epsM);
	unset($epsE);
	echo json_encode($retorno);
?>