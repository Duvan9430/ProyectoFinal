<?php

include '../../modelo/Conexion.php';
include '../../entidad/Rutinas/ejercicioE.php';
include '../../modelo/Rutinas/ejercicioMusculoM.php';

error_reporting(0);

$retorno = array('mensaje');

$ejercicioE  = new EjercicioE();
$idmusculo=$_POST['checkedMusculo'];
$ejmDescripcion=$_POST['txtEjmDescripcion'];

$descripcion=count($ejmDescripcion);

for ($i=0; $i < $descripcion; $i++) {
	if ($ejmDescripcion[$i]=="") {
		unset($ejmDescripcion[$i]);
	}
}
sort($ejmDescripcion);
var_export($ejmDescripcion);

$imagen[]=array();

		$uploads_dir='../../img/Rutinas/Ejercicios/';
		$i=0;
		foreach ($_FILES["imagen"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$tmp_name= $_FILES["imagen"]["tmp_name"][$key];
				$name= basename($_FILES["imagen"]["name"][$key]);
				$imagen[$i]=$name;
				move_uploaded_file($tmp_name, "$uploads_dir/$name");
				$i++;
			}
		}


$ejercicioE->setIdEjercicio($_POST['sltEjercicio']);
$ejercicioE->setIdMusculo($idmusculo);
$ejercicioE->setEjmDescripcion($ejmDescripcion);
$ejercicioE->setEjmFoto($imagen);


$ejercicioMusculoM = new EjercicioMusculoM();

$retorno['mensaje'] = $ejercicioMusculoM->CreateEjercicioMusculo($ejercicioE);


unset($ejercicioE);
unset($ejercicioMusculoM);


echo json_encode($retorno);



?>
