<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/modeloP.php';
// require_once '../entidad/ejercicioE.php';


error_reporting(1);

$retorno = array('mensaje','arrayEstadistica1','arrayEstadistica2','arrayEstadistica3','arrayEstadistica4');

// $estadisticaE = new EjercicioE();

$estadisticaM = new Modelo();

$est1 = $estadisticaM->estadistica1();
$retorno["arrayEstadistica1"] = $est1->datos->fetchAll(PDO::FETCH_ASSOC);
$est2 = $estadisticaM->estadistica2();
$retorno["arrayEstadistica2"] = $est2->datos->fetchAll(PDO::FETCH_ASSOC);
$est3 = $estadisticaM->estadistica3();
$retorno["arrayEstadistica3"] = $est3->datos->fetchAll(PDO::FETCH_ASSOC);
$est4 = $estadisticaM->estadistica4();
$retorno["arrayEstadistica4"] = $est4->datos->fetchAll(PDO::FETCH_ASSOC);
// $retorno["arrayEstadistica2"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
// $retorno["arrayEstadistica3"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);


unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);

?>