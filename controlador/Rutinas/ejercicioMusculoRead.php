<?php

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioMusculoM.php';
require_once '../../entidad/Rutinas/ejercicioMusculoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayEjercicioMusculo');

$ejercicioMusculoE = new EjercicioMusculoE();

$ejercicioMusculoM = new EjercicioMusculoM();

$resultado = $ejercicioMusculoM->Read();
$retorno["arrayEjercicioMusculo"] = $resultado->datos->fetchAll();

unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);

?>
