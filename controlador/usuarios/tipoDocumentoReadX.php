<?php 

require_once '../../modelo/Conexion.php';
require_once '../../entidad/usuarios/tipoDocumentoE.php';
require_once '../../modelo/usuarios/tipoDocumentoM.php';


error_reporting(1);

$idTipoIdentificacion=$_POST['idTipoIdentificacion'];
$retorno = array('mensaje', 'arrayXTipoDocumento');

$tipoDocumentoE = new TipoDocumentoE();
$tipoDocumentoE->setIdTipoDocumeto($idTipoIdentificacion);

$tipoDocumentoM = new TipoDocumentoM();

$resultado = $tipoDocumentoM->ReadXtipo($tipoDocumentoE);
$retorno["arrayXTipoDocumento"] = $resultado->datos->fetchAll();

unset($tipoDocumentoE);
unset($tipoDocumentoM);


echo json_encode($retorno);

?>