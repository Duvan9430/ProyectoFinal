<?php

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioMusculoM.php';
require_once '../../entidad/Rutinas/ejercicioMusculoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayEjercicio');

$ejercicioMusculoE = new EjercicioMusculoE();

$ejercicioMusculoM = new EjercicioMusculoM();

$resultado = $ejercicioMusculoM->ConsultarEjercicio();
$retorno["arrayEjercicio"] = $resultado->datos->fetchAll();

unset($ejercicioMusculoE);
unset($ejercicioMusculoM);


echo json_encode($retorno);

?>
