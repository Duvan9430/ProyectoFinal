<?php 
	
	session_start();

	$_SESSION["DatosMaquina"] = $_POST["DatosMaquina"];

	$retorno["estado"] = $_POST["DatosMaquina"];

	echo json_encode($retorno);
 ?>