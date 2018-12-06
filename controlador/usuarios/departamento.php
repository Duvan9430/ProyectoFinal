<?php  
require_once '../Modelo/Conexion.php';
require_once '../Entidad/departamentoE.php';
require_once '../Modelo/departamentoM.php';

error_reporting(1);
$retorno = array('mensaje','departamento');

$departamentoM = new DepartamentoM();
$resultado = $departamentoM->read();
$retorno["departamento"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($departamentoM);
unset($departamentoE);

echo json_encode($retorno);
?>