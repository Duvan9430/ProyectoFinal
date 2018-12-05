<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioM.php';
require_once '../../entidad/Rutinas/ejercicioE.php';


error_reporting(1);

$retorno = array('mensaje','arrayMusculo');

$ejercicioE = new EjercicioE();

$ejercicioM = new EjercicioM();

$resultado = $ejercicioM->ConsultarMusculo();
$retorno["arrayMusculo"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);

?>