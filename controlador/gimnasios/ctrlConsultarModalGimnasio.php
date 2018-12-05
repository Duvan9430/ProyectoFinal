<?php 
require_once '../../modelo/conexion.php';
require_once '../../modelo/gimnasios/mdlGimnasio.php';
error_reporting(1);
$retorno = array('mensaje','gimnasio' );

$MdlGimnasio = new MdlGimnasio();
$resultado = $MdlGimnasio->consultarModal($_POST['idGimnasio']);
$retorno["mensaje"] = $resultado->mensaje;
$retorno["gimnasio"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

unset($entGimnasio);
unset($mdlGimnasio);

echo json_encode($retorno);
 ?>