<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/generoM.php';
	require_once '../Entidad/generoE.php';


	$retorno = array('mensaje','arrayGeneroModal');
	$generoE=new GeneroE();
	
	$generoM = new GeneroM();
	$resultado = $generoM->consultarModal();
	$retorno["arrayGeneroModal"] = $resultado->datos->fetchAll();

	unset($generoM);
	unset($generoE);
	echo json_encode($retorno);
?>