<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/tipoDocumentoM.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';


	$retorno = array('mensaje','arrayTipoDocumento');
	$tipoDocumentoE=new TipoDocumentoE();
	
	$tipoDocumentoM = new TipoDocumentom();
	$resultado = $tipoDocumentoM->consultar();
	$retorno["arrayTipoDocumento"] = $resultado->datos->fetchAll();

	unset($tipoDocumentoM);
	unset($tipoDocumentoE);
	echo json_encode($retorno);
?>