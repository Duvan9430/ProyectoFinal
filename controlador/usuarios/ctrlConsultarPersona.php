<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlPersona.php';

    $retorno =array('array');
 

    $MdlPersona =new MdlPersona();
    $resultado = $MdlPersona->consultarPersona();
    $retorno ["array"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);
 	
    echo json_encode($retorno);

 ?>