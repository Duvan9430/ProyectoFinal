<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/usuarios/fichaM.php';
	require_once '../../entidad/usuarios/fichaE.php';
	
	
	//error_reporting(1);

	$retorno = array('mensaje');
	$fichaE = new FichaE();
	$usuarioCreacion=-1;
	$usuarioModificacion=-1;
	$ficNombre=$_POST['ficNombre'];
	$ficNumero=$_POST['ficNumero'];
	

	$fichaE->setFicNombre($ficNombre);
	$fichaE->setFicNumero($ficNumero);
	$fichaE->setUsuarioCreacion($usuarioCreacion);
	$fichaE->setUsuarioModificacion($usuarioModificacion);
	
	

	$fichaM = new FichaM();
	
	$resultado = $fichaM->crearFicha($fichaE);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($fichaE);
	unset($fichaM);

	echo json_encode($retorno);




?>