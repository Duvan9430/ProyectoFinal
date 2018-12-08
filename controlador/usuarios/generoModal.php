<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/generoM.php';
	require_once '../../entidad/usuarios/generoE.php';


	$retorno = array('mensaje','arrayGeneroModal');
	$generoE=new GeneroE();
	
	$generoM = new GeneroM();
	$resultado = $generoM->consultarModal();
	$retorno["arrayGeneroModal"] = $resultado->datos->fetchAll();

	unset($generoM);
	unset($generoE);
	echo json_encode($retorno);
?>