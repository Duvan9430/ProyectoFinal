<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/tipoDocumentoPersonaM.php';


	$retorno = array('mensaje','arrayTipoDocumentoModal');
	
	$tipoDocumentoM = new TipoDocumentom();
	$resultado = $tipoDocumentoM->consultarModal();
	$retorno["arrayTipoDocumentoModal"] = $resultado->datos->fetchAll();

	unset($tipoDocumentoM);
	echo json_encode($retorno);
?>