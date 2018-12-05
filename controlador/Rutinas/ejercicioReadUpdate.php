<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioM.php';
require_once '../../entidad/Rutinas/ejercicioE.php';


error_reporting(1);

$retorno = array('mensaje','arrayEjercicioMod');

$ejercicioE = new EjercicioE();
$id=$_POST['idEjercicio'];
$ejercicioE->setIdEjercicio($id);

$ejercicioM = new EjercicioM();
$resultado = $ejercicioM->ReadUpdate($ejercicioE);
$retorno["arrayEjercicioMod"] = $resultado->datos->fetchAll();

// print_r($resultado);
unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);
?>
