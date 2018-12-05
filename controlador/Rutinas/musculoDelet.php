<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/musculoM.php';
require_once '../../entidad/Rutinas/musculoE.php';


error_reporting(1);

$retorno = array('mensaje');

$musculoE = new MusculoE();

$musculoE->setIdMusculo($_POST['idMusculoEliminar']);

$musculoM = new MusculoM();
$resultado = $musculoM->Delet($musculoE);
$retorno["mensaje"] = $resultado->mensaje;

// print_r($resultado);
unset($musculoE);
unset($musculoM);


echo json_encode($retorno);
?>
