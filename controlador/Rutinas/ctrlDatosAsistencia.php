<?php 
	
	session_start();

	$_SESSION["DatosAsistencia"] = $_POST["DatosAsistencia"];

	$retorno["estado"] = $_POST["DatosAsistencia"];

	echo json_encode($retorno);
 ?>