<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../entidad/usuarios/tipoDocumentoE.php';
	require_once '../../modelo/usuarios/tipoDocumentoM.php';
	
	
	//error_reporting(1);
	$idDocumento=$_POST['idTipoIdentidadModal'];

	$retorno = array('mensaje', 'arrayXTipoDocumento');


	$tipoDocumentoE = new TipoDocumentoE();
	

	$tipoDocumentoE->setIdTipoDocumeto($idDocumento);
	
	

	$tipoDocumentoM = new TipoDocumentoM();
	
	$resultado = $tipoDocumentoM->delete($tipoDocumentoE);
	$retorno["mensaje"] = $resultado->mensaje;
	//$retorno["arrayXTipoDocumento"] = $resultado->datos->fetchAll();
	unset($tipoDocumentoE);
	unset($tipoDocumentoM);

	echo json_encode($retorno);




?>

