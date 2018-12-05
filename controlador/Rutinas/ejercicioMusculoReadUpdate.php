<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioMusculoM.php';
require_once '../../entidad/Rutinas/ejercicioMusculoE.php';


error_reporting(1);

$retorno = array('mensaje','arrayEjercicioMusculoMod');

$ejercicioMusculoE = new EjercicioMusculoE();
$id=$_POST['idEjercicioMusculo'];
$ejercicioMusculoE->setIdEjercicioMusculo($id);

$ejercicioMusculoM = new EjercicioMusculoM();
$resultado = $ejercicioMusculoM->ReadUpdate($ejercicioMusculoE);
$retorno["arrayEjercicioMusculoMod"] = $resultado->datos->fetchAll();

// print_r($resultado);
unset($ejercicioMusculoE);
unset($ejercicioMusculoM);


echo json_encode($retorno);
?>
