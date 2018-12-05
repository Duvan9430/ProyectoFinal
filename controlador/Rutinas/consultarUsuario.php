<?php 

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/rutinaM.php';
// require_once '../entidad/rutina.php';


error_reporting(1);

$retorno = array();

// $rutinaE = new RutinaE();

// $rutinaE->setIdUsuario($_POST['txtID']);

$rutinaM = new RutinaM();
$resultado = $rutinaM->autocompletar();
$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($retorno);

?>