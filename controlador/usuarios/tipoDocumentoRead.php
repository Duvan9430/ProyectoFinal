<?php 

require_once '../../modelo/conexion.php';
require_once '../../modelo/usuarios/tipoDocumentoM.php';
require_once '../../entidad/usuarios/tipoDocumentoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayTipoDocumento');

$tipoDocumentoE = new TipoDocumentoE();

$tipoDocumentoM = new TipoDocumentoM();

$resultado = $tipoDocumentoM->Read();
$retorno["arrayTipoDocumento"] = $resultado->datos->fetchAll();

unset($tipoDocumentoE);
unset($tipoDocumentoM);


echo json_encode($retorno);

?>