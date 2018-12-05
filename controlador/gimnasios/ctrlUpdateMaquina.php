<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/gimnasios/mdlMaquina.php';
    $retorno =array('array');

    $MdlMaquina =new MdlMaquina();
    $resultado = $MdlMaquina->updateMaquina();

    $retorno ["array"]=$resultado->datos->fetchAll();

    echo json_encode($retorno);

 ?>