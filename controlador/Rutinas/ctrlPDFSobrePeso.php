<?php 

	session_start();
	$_SESSION["ConsultarSobrePeso"]= $_POST["ConsultarSobrePeso"];
	$retorno["estado"] = $_POST["ConsultarSobrePeso"];

	echo json_encode($retorno);

 ?>