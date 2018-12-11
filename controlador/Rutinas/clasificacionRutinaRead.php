<?php

require_once '../../modelo/Conexion.php';
require_once './../modelo/clasificacionRutinaM.php';


error_reporting(1);

$retorno = array('mensaje','arrayClasificacionRutina');
//$clasificacionRutinaE  = new ClasificacionRutinaE();

$clasificacionRutinaM = new ClasificacionRutinaM();

$resultado = $clasificacionRutinaM->Read();
$retorno["arrayClasificacionRutina"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($clasificacionRutinaE);
unset($clasificacionRutinaM);


echo json_encode($retorno);

?>
