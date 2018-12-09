<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/tipoDocumentoM.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';


	$retorno = array();
	$tipoDocumentoE=new TipoDocumentoE();
	
	$tipoDocumentoM = new TipoDocumentom();
	$resultado = $tipoDocumentoM->ReadXtipo();
	$retorno["arrayTipoDocumentoModal"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($tipoDocumentoM);
	unset($tipoDocumentoE);
	echo json_encode($retorno);
?>