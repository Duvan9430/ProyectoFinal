<?php  
require_once '../../modelo/Conexion.php';
require_once '../../entidad/usuarios/departamentoE.php';
require_once '../../modelo/usuarios/departamentoM.php';

error_reporting(1);
$retorno = array('mensaje','departamento');

$departamentoM = new DepartamentoM();
$resultado = $departamentoM->read();
$retorno["departamento"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($departamentoM);
unset($departamentoE);

echo json_encode($retorno);
?>