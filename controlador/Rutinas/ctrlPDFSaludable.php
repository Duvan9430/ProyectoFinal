<?php 
	session_start();
	$_SESSION["ConsultarSaludable"]= $_POST["ConsultarSaludable"];
	$retorno["estado"] = $_POST["ConsultarSaludable"];

	echo json_encode($retorno);


 ?>