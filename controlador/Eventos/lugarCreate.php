<?php 
require_once '../../modelo/Eventos/lugarM.php';
require_once '../../modelo/Conexion.php';
require_once '../../entidad/Eventos/lugarE.php';
error_reporting(1);
$retorno = array('mensaje');

$lugarE = new LugarE();
$lugarE->setIdMunicipio($_POST['sltMunicipio']);
$lugarE->setLugNombre($_POST['txtNombreLugar']);
$lugarE->setLugDireccion($_POST['txtDireccionLugar']);
$lugarM = new LugarM();
$resultado =$lugarM->create($lugarE);
$retorno['mensaje'] = $resultado->mensaje;

unset($lugarE);
unset($lugarM);

echo json_encode($retorno);
?>
