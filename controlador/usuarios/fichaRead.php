<?php 

require_once '../../modelo/conexion.php';
require_once '../../modelo/usuarios/fichaM.php';
require_once '../../entidad/usuarios/fichaE.php';


error_reporting(1);

$retorno = array('mensaje','arrayFicha');

$fichaE = new FichaE();

$fichaM = new FichaM();

$resultado = $fichaM->Read();
$retorno["arrayFicha"] = $resultado->datos->fetchAll();

unset($fichaE);
unset($fichaM);


echo json_encode($retorno);

?>