<?php

include '../../modelo/Conexion.php';
include '../../entidad/Rutinas/ejercicioE.php';
include '../../modelo/Rutinas/ejercicioM.php';

error_reporting(1);

  $retorno = array('mensaje');

  $ejercicioE  = new EjercicioE();

  $ejercicioE->setIdEjercicio($_POST['idEjercicio']);
  $ejercicioE->setTipoEjercicio($_POST['sltTipoEjercicioModificar']);
  $ejercicioE->setEjeNombre($_POST['txtEjeNombreModificar']);
  $ejercicioE->setEjeDetalle($_POST['txtDetallesModificar']);

  if($_FILES['filesModificar']['tmp_name']!=""){
    $uploads_dir='../../img/Rutinas/Ejercicios';
    $tmp_name= $_FILES["filesModificar"]["tmp_name"];
    $name= basename($_FILES["filesModificar"]["name"]);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
  }
  else{
      $name="";
  }
    $ejercicioE->setEjeImagen($name);


  $ejercicioM = new EjercicioM();
	$retorno['mensaje'] = $ejercicioM->Upddate($ejercicioE);



	unset($ejercicioE);
	unset($ejercicioM);

  echo json_encode($retorno);

?>
