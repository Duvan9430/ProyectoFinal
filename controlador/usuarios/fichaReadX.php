<?php 

require_once '../../modelo/conexion.php';
require_once '../../entidad/usuarios/fichaE.php';
require_once '../../modelo/usuarios/fichaM.php';


error_reporting(1);

$idFicha=$_POST['idFicha'];
$retorno = array('mensaje', 'arrayXFicha');

$fichaE = new FichaE();
$fichaE->setIdFicha($idFicha);

$fichaM = new FichaM();

$resultado = $fichaM->ReadXtipo($fichaE);
$retorno["arrayXFicha"] = $resultado->datos->fetchAll();

unset($fichaE);
unset($fichaM);


echo json_encode($retorno);

?>