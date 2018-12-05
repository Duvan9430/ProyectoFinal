<?php

include '../../modelo/Conexion.php';
include '../../entidad/Rutinas/ejercicioE.php';
include '../../modelo/Rutinas/ejercicioM.php';

error_reporting(1);

$retorno = array('mensaje');

$ejercicioE  = new EjercicioE();

$ejercicioE->setTipoEjercicio($_POST['sltTipoEjercicio']);
$ejercicioE->setEjeNombre($_POST['txtEjeNombre']);
$ejercicioE->setEjeDetalle($_POST['txtDetalles']);
$ejercicioE->setEjeImagen($_POST['txtEjeNombre'].'.jpg');
$file = $_FILES['files'];


$ejercicioM = new EjercicioM();
if (move_uploaded_file($_FILES['files']['tmp_name'], '../../img/Rutinas/imgEjercicios/'.$_POST['txtEjeNombre'].'.jpg')) {
	$retorno['mensaje'] = $ejercicioM->Create($ejercicioE);

	unset($ejercicioE);
	unset($ejercicioM);
}
else{
	echo "mal";
}

echo json_encode($retorno);
?>
