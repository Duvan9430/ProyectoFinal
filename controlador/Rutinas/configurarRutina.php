<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/rutinaM.php';
require_once '../../entidad/Rutinas/rutinaE.php';


error_reporting(1);

$retorno = array('mensaje','arrayRutina');

$rutinaE = new RutinaE();

$rutinaM = new RutinaM();

$resultado = $rutinaM->CargarModal($_POST['idRutina']);
$retorno["arrayRutina"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($rutinaE);
unset($rutinaM);


echo json_encode($retorno);

?>