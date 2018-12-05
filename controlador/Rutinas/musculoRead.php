<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/musculoM.php';
require_once '../../entidad/Rutinas/musculoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayMusculo');

$musculoE = new MusculoE();

$musculoM = new MusculoM();

$resultado = $musculoM->Read();
$retorno["arrayMusculo"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);


unset($musculoE);
unset($musculoM);


echo json_encode($retorno);

?>