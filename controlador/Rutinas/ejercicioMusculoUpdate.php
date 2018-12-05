<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/Rutinas/ejercicioMusculoM.php';
require_once '../../entidad/Rutinas/ejercicioMusculoE.php';


error_reporting(1);

$retorno = array('mensaje');

$ejercicioMusculoE = new EjercicioMusculoE();

$ejercicioMusculoE->setIdEjercicioMusculo($_POST['idEjercicioMusculo']);
$ejercicioMusculoE->setIdMusculo($_POST['sltMusculoModificar']);
$ejercicioMusculoE->setIdEjercicio($_POST['sltEjercicioEditar']);
$ejercicioMusculoE->setEjmDescripcion($_POST['txtEjmDescripcionMod']);

if($_FILES['imagenModificar']['tmp_name']!=""){
$uploads_dir='../img';
$tmp_name= $_FILES["imagenModificar"]["tmp_name"];
$name= basename($_FILES["imagenModificar"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");
}
else{
  $name="";
}
$ejercicioMusculoE->setEjmFoto($name);

$ejercicioMusculoM = new EjercicioMusculoM();
$resultado = $ejercicioMusculoM->Update($ejercicioMusculoE);
$retorno["mensaje"] = $resultado->mensaje;

// print_r($resultado);
unset($ejercicioMusculoE);
unset($ejercicioMusculoM);

echo json_encode($retorno);



?>
