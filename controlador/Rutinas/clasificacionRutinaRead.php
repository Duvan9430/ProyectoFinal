<?php

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/clasificacionRutinaM.php';
require_once '../../entidad/Rutinas/clasificacionRutinaE.php';


error_reporting(1);

$retorno = array('mensaje','arrayClasificacionRutina');

$clasificacionRutinaE  = new ClasificacionRutinaE();

$clasificacionRutinaM = new ClasificacionRutinaM();

$resultado = $clasificacionRutinaM->Read();
$retorno["arrayClasificacionRutina"] = $resultado->datos->fetchAll();

unset($clasificacionRutinaE);
unset($clasificacionRutinaM);


echo json_encode($retorno);

?>
