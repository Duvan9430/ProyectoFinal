<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/usuarios/fichaM.php';
	require_once '../../entidad/usuarios/fichaE.php';
	
	
	error_reporting(1);

	$retorno = array('mensaje');
	$fichaE = new FichaE();
	$ficNombre=$_POST['ficNombre'];
	$ficNumero=$_POST['ficNumero'];
	

	$fichaE->setFicNombre($ficNombre);
	$fichaE->setFicNumero($ficNumero);
	$fichaE->setUsuarioCreacion($usuarioCreacion);
	$fichaE->setUsuarioModificacion($usuarioModificacion);
	
	

	$fichaM = new FichaM();
	
	$resultado = $fichaM->createFicha($fichaE);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($fichaE);
	unset($fichaM);

	echo json_encode($retorno);




?>