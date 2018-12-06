<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/MdlPersona.php';

    $retorno =array('array');
 

    $MdlPersona =new MdlPersona();
    $resultado = $MdlPersona->consultarPersona();
    $retorno ["array"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);
 	
    echo json_encode($retorno);

 ?>