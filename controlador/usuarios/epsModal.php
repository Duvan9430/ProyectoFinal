<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/epsM.php';
	require_once '../../entidad/usuarios/epsE.php';


	$retorno = array('mensaje','arrayEpsModal');
	$epsE=new EpsE();
	
	$epsM = new EpsM();
	$resultado = $epsM->consultarModal();
	$retorno["arrayEpsModal"] = $resultado->datos->fetchAll();

	unset($epsM);
	unset($epsE);
	echo json_encode($retorno);
?>