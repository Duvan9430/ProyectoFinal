<?php 
	session_start();
	$_SESSION["ConsultarBajoPeso"]= $_POST["ConsultarBajoPeso"];
	$retorno["estado"] = $_POST["ConsultarBajoPeso"];

	echo json_encode($retorno);


 ?>