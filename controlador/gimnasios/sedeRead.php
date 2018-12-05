<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlGimnasio.php';
    $retorno =array();
    try {
	    $MdlGimnasio = new MdlGimnasio();
	    $resultado = $MdlGimnasio->consultaSede();
	    $retorno =$resultado;
    } catch (Exception $e) {
    	$retorno = "Error: " .$e->getMessage();
    }
    echo json_encode($retorno);
 ?>