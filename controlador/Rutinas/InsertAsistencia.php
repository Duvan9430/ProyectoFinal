<?php 
	require_once "../../modelo/Conexion.php";
	require_once "../../entidad/Rutinas/IngresoGimnasioE.php";
	require_once "../../modelo/Rutinas/IngresoGimnasioM.php";

	error_reporting(1);

	$retorno = array('array' => null, 'estado' => null, 'mensaje' => null,);

	function InsertAsistencia(){
		$entRegistro = new RegistroGimnasioE();
		$entRegistro->setPerNit($_POST['perNit']); //$_POST['perNit']
		//$entRegistro->setIdAprendiz('1');
		$mdlPersona = new IngresoGimnasioM();
		$aprendiz = $mdlPersona->ConsultarPersona($entRegistro);
		$id = $aprendiz->datos->idAprendiz;
		//echo $id;
		if(empty($id)){
			$retorno['mensaje'] = "Persona inexistente.";
			//echo json_encode($retorno);
		}else{
			$entRegistro->setIdAprendiz($id);
			$resultado = $mdlPersona->InsertarAsistencia($entRegistro);
			$retorno['array'] = $resultado->datos;
			$retorno['estado'] = $resultado->estado;
			$retorno['mensaje'] = $resultado->mensaje;
			//echo json_encode($retorno);
		}
		// $resultado2 = $mdlPersona->ConsultarExistencia();
		// $resultado = $mdlPersona->InsertarAsistencia($entRegistro);
		return $retorno;
	}
	function ReadIdentificacion(){
		$mdlPersona = new IngresoGimnasioM();

		$resultado = $mdlPersona->consultarIdentificacion();

		$retorno['array'] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
		$retorno['estado'] = $resultado->estado;
		$retorno['mensaje'] = $resultado->mensaje;

		return $retorno;
	}
	$funcion = $_POST['crudAsistencia'];
	echo json_encode($funcion());
 ?>