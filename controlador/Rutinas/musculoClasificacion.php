<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/musculoM.php';
require_once '../../entidad/Rutinas/musculoE.php';


error_reporting(1);

$retorno = array('mensaje', 'arrayMusculoClasificacion');

$musculoE = new MusculoE();

$musculoM = new MusculoM();
$resultado = $musculoM->ClasificacionMusculo();
$retorno["arrayMusculoClasificacion"] = $resultado->datos->fetchAll();

// print_r($resultado);
unset($musculoE);
unset($musculoM);


echo json_encode($retorno);
 ?>
