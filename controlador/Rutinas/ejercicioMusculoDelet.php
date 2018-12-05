<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioMusculoM.php';
require_once '../../entidad/Rutinas/ejercicioMusculoE.php';


error_reporting(1);

$retorno = array('mensaje');

$ejercicioMusculoE = new EjercicioMusculoE();
$ejercicioMusculoE->setIdEjercicioMusculo($_POST['IdEliminar']);

$ejercicioMusculoM = new EjercicioMusculoM();
$retorno['mensaje'] = $ejercicioMusculoM->Delet($ejercicioMusculoE);

// print_r($resultado);
unset($ejercicioMusculoE);
unset($ejercicioMusculoM);


echo json_encode($retorno);
?>
