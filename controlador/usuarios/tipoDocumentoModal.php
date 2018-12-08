<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../odelo/usuarios/tipoDocumentoM.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';


	$retorno = array('mensaje','arrayTipoDocumentoModal');
	$tipoDocumentoE=new TipoDocumentoE();
	
	$tipoDocumentoM = new TipoDocumentom();
	$resultado = $tipoDocumentoM->consultarModal();
	$retorno["arrayTipoDocumentoModal"] = $resultado->datos->fetchAll();

	unset($tipoDocumentoM);
	unset($tipoDocumentoE);
	echo json_encode($retorno);
?>