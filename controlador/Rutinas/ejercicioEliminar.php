<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioM.php';
require_once '../../entidad/Rutinas/ejercicioE.php';


error_reporting(1);

$retorno = array('mensaje');

$ejercicioE = new EjercicioE();
$ejercicioE->setIdEjercicio($_POST['idEjercicioEliminar']);

$ejercicioM = new EjercicioM();
$retorno['mensaje'] = $ejercicioM->Delet($ejercicioE);

// print_r($resultado);
unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);
?>
