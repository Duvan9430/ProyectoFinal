<?php 
require_once '../Modelo/Conexion.php';
require_once '../Entidad/iniciarSesionE.php';
require_once '../Modelo/iniciarSesionM.php';

error_reporting(1);
	$retorno = array('mensaje' => '', 'estado' =>null, 'array' => null);

	$iniciarSesionE = new iniciarSesionE();
	$iniciarSesionE->setUsuUsuario ($_POST['txtUsuario']);
	$iniciarSesionE->setUsuPassword($_POST['txtPassword']);


	$iniciarSesionM = new iniciarSesionM();
	$resultado = $iniciarSesionM->createSesion($iniciarSesionE);
	$retorno["mensaje"] = $resultado->mensaje;
	$retorno["estado"] = $resultado->estado;
	$retorno["array"] = $resultado->datos;

	

	 if($resultado->datos->rowCount()>0){
	 	$retorno["array"] = $resultado->datos->fetch(PDO::FETCH_ASSOC);
	 	session_start();
	 	
	 	$_SESSION['idPersona'] = $retorno['array'][0];
	 	$_SESSION['rolLogueado'] = $retorno['array']['idRol'];
	 	$_SESSION['nombreUnoLogueado'] = $retorno['array']['perPrimerNombre'];
	 	$_SESSION['nombreDosLogueado'] = $retorno['array']['perSegundoNombre'];
	 	$_SESSION['apellidoUnoLogueado'] = $retorno['array']['perPrimerApellido'];
	 	$_SESSION['correoLogueado'] = $retorno['array']['perCorreoElectronico'];
	 	$_SESSION['idPersonaLogueada'] = $retorno['array']['idPersona'];

	 }else{
	 	
	 	$retorno['mensaje'] = "Error al iniciar Sesion";
	 }

	 unset($iniciarSesionE);
	 unset($iniciarSesionM);

	//echo $_SESSION['apellidoUnoLogueado'];
	echo json_encode($retorno);
	//echo $_SESSION['nombreUnoLogueado']; 
	//echo $_SESSION['nombreDosLogueado'];
	//echo $_SESSION['rolLogueado'];
	//echo $_SESSION['idPersona'];
 ?>
