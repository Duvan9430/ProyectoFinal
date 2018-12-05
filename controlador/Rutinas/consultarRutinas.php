<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/rutinaM.php';


error_reporting(1);

$retorno = array('mensaje','arrayRutina');


$rutinaM = new RutinaM();

$resultado = $rutinaM->ConsultarRutinas($_POST['idClasificacionRutina']);
$retorno["arrayRutina"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($rutinaE);
unset($rutinaM);


echo json_encode($retorno);

?>