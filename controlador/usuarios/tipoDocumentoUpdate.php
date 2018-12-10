<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';
	require_once '../../modelo/usuarios/tipoDocumentoM.php';
	
	
	error_reporting(1);
	$idDocumento=$_POST['txtIdTipoIdentidad'];
	$tidNombre=$_POST['tidNombreMod'];
	$tidAbreviacion=$_POST['tidAbreviacionMod'];

	$retorno = array('mensaje', 'arrayXTipoDocumento');


	$tipoDocumentoE = new TipoDocumentoE();
	

	$tipoDocumentoE->setIdTipoDocumeto($idDocumento);
	$tipoDocumentoE->setTidNombre("$tidNombre");
	$tipoDocumentoE->setTidAbreviacion($tidAbreviacion);
	

	$tipoDocumentoM = new TipoDocumentoM();
	
	$resultado = $tipoDocumentoM->modificar($tipoDocumentoE);
	$retorno["mensaje"] = $resultado->mensaje;
	//$retorno["arrayXTipoDocumento"] = $resultado->datos->fetchAll();
	unset($tipoDocumentoE);
	unset($tipoDocumentoM);

	echo json_encode($retorno);




?>






		

