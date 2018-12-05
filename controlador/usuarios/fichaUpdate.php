<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../entidad/usuarios/fichaE.php';
	require_once '../../modelo/usuarios/fichaM.php';
	
	
	//error_reporting(1);
	$idFicha=$_POST['txtIdFicha'];
	$ficNombre=$_POST['ficNombreMod'];
	$ficNumero=$_POST['ficNumeroMod'];

	$retorno = array('mensaje', 'arrayXFicha');


	$fichaE = new FichaE();
	

	$fichaE->setIdFicha($idFicha);
	$fichaE->setFicNombre($ficNombre);
	$fichaE->setFicNumero($ficNumero);
	

	$fichaM = new FichaM();
	
	$resultado = $fichaM->modificar($fichaE);
	$retorno["mensaje"] = $resultado->mensaje;
	//$retorno["arrayXTipoDocumento"] = $resultado->datos->fetchAll();
	unset($fichaE);
	unset($fichaM);

	echo json_encode($retorno);




?>






		

