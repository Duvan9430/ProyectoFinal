<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/musculoM.php';
require_once '../../entidad/Rutinas/musculoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayMusculoUpdate');

$musculoE = new MusculoE();
$id=$_POST['idMusculo'];
$musculoE->setIdMusculo($id);

$musculoM = new MusculoM();
$resultado = $musculoM->ReadUpdate($musculoE);
$retorno["arrayMusculoUpdate"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

// print_r($resultado);
unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);
?>
