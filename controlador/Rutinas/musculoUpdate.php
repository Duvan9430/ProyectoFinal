<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/musculoM.php';
require_once '../../entidad/Rutinas/musculoE.php';


error_reporting(1);

$retorno = array('mensaje');

$musculoE = new MusculoE();

$musculoE->setIdMusculo($_POST['idMusculo']);
$musculoE->setUsuNombre($_POST['txtMusNombreUpdate']);
$musculoE->setClasificacionMusculo($_POST['sltClasificacionMusculoUpdate']);

$musculoM = new MusculoM();
$resultado = $musculoM->Update($musculoE);
$retorno["mensaje"] = $resultado->mensaje;

// print_r($resultado);
unset($musculoE);
unset($musculoM);


echo json_encode($retorno);
?>
