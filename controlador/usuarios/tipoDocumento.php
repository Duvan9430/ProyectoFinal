<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/tipoDocumentoM.php';
	require_once '../Entidad/tipoDocumentoE.php';


	$retorno = array('mensaje','arrayTipoDocumento');
	$tipoDocumentoE=new TipoDocumentoE();
	
	$tipoDocumentoM = new TipoDocumentom();
	$resultado = $tipoDocumentoM->consultar();
	$retorno["arrayTipoDocumento"] = $resultado->datos->fetchAll();

	unset($tipoDocumentoM);
	unset($tipoDocumentoE);
	echo json_encode($retorno);
?>