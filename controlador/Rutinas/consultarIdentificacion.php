<?php  

require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/rutinaM.php';

$retorno = array();

$rutinaM = new RutinaM();

$resultado = $rutinaM->consultarUsuario($_POST['txtIdentificacion']);

$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($retorno);
?>