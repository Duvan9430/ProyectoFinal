<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/tipoDocumentoM.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';
	
	
	error_reporting(1);

	$retorno = array('mensaje');
	$tipoDocumentoE = new TipoDocumentoE();
	$usuarioCreacion=-1;
	$tidNombre=$_POST['tidNombre'];
	$tidAbreviacion=$_POST['tidAbreviacion'];
	

	$tipoDocumentoE->setTidNombre($tidNombre);
	$tipoDocumentoE->setTidAbreviacion($tidAbreviacion);
	$tipoDocumentoE->setUsuarioCreacion($usuarioCreacion);
	$tipoDocumentoE->setUsuarioModificacion($usuarioCreacion);

	$tipoDocumentoM = new TipoDocumentoM();
	
	$resultado = $tipoDocumentoM->crearTipoDocumento($tipoDocumentoE);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($tipoDocumentoE);
	unset($tipoDocumentoM);

	echo json_encode($retorno);




?>