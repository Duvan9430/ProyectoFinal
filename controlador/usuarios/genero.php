<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/generoM.php';
	require_once '../../entidad/usuarios/generoE.php';


	$retorno = array('mensaje','arrayGenero');
	$generoE=new GeneroE();
	
	$generoM = new GeneroM();
	$resultado = $generoM->consultar();
	$retorno["arrayGenero"] = $resultado->datos->fetchAll();

	unset($generoM);
	unset($generoE);
	echo json_encode($retorno);
?>