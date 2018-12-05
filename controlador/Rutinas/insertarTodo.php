<?php  

	include_once '../../modelo/Conexion.php';
	include_once '../../modelo/Rutinas/rutinaM.php';
	include_once '../../entidad/Rutinas/valoracionE.php';


error_reporting(0);

$retorno = array();

$valoracionE = new ValoracionE();
$diasRutina = new RutinaE();

$valoracionE->setTipoValoracion($_POST["slcTipoValoracion"]);
$valoracionE->setRangoImc($_POST["rango"]);
$valoracionE->setValPeso($_POST["valPeso"]);
$valoracionE->setValEstatura($_POST["valEstatura"]);
$valoracionE->setValImc($_POST["valImc"]);
$valoracionE->setValEdad($_POST["valEdad"]);
$valoracionE->setValDescripcion($_POST["valDescripcion"]);
$valoracionE->setValObservacion($_POST["valObservacion"]);

$diasRutina->setLunes($_POST["lunes"]);
$diasRutina->setMartes($_POST["martes"]);
$diasRutina->setMiercoles($_POST["miercoles"]);
$diasRutina->setJueves($_POST["jueves"]);
$diasRutina->setViernes($_POST["viernes"]);


$rutinaM = new RutinaM();
$resultado = $rutinaM->crearTodo($valoracionE, $_POST["id"]);

$retorno = $resultado->mensaje;
echo json_encode($retorno);


?>