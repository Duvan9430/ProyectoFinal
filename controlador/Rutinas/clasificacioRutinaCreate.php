<?php

include '../../modelo/Conexion.php';
include '../../entidad/Rutinas/clasificacionRutinaE.php';
include '../../modelo/Rutinas/clasificacionRutinaM.php';

error_reporting(1);

$retorno = array('mensaje');

$clasificacionRutinaE  = new ClasificacionRutinaE();
$clrNombre=$_POST['txtNombre'];
$clrDescripcion=$_POST['txtDescripcion'];


$clasificacionRutinaE->setClrNombre($clrNombre);
$clasificacionRutinaE->setClrDescripcion($clrDescripcion);


$clasificacionRutinaM = new ClasificacionRutinaM();

$retorno['mensaje'] = $clasificacionRutinaM->Create($clasificacionRutinaE);


unset($clasificacionRutinaE);
unset($clasificacionRutinaM);


echo json_encode($retorno);



?>
