<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioM.php';
require_once '../../entidad/Rutinas/ejercicioE.php';


error_reporting(1);

$retorno = array('mensaje','arrayTipoEjercicio');

$ejercicioE = new EjercicioE();

$ejercicioM = new EjercicioM();

$resultado = $ejercicioM->ConsultarTipoEjercicio();
$retorno["arrayTipoEjercicio"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($ejercicioE);
unset($ejercicioM);


echo json_encode($retorno);

?>