<?php


/**
* 
*/
class mdlGenerarReportes
{
	private $conexion;
	private $retorno;

	function __construct()
	{
		$this->conexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	function consultarMaquina()
	{
		try {

			$consulta = "SELECT maquina.maqNombre, maquina.maqCodigo, maquina.estado, maquina.maqDescripcion from maquina";
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;
				
		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;
	}

	function consultarAsistencia()
	{
		try {

			$consulta = "SELECT asistenciagimnasio.asgFecha,persona.perPrimerNombre, persona.perSegundoNombre, persona.perPrimerApellido, persona.perSegundoApellido, ficha.ficNumero, persona.perNit FROM asistenciagimnasio INNER JOIN aprendiz ON asistenciagimnasio.idAprendiz = aprendiz.idAprendiz INNER JOIN persona ON aprendiz.idPersona = persona.idPersona INNER JOIN ficha ON ficha.idFicha = aprendiz.idFicha";
			
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;
				
		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;
	}

	function consultarAsistenciaPersonalizada($campo, $consulta){
		try {

			$consulta = "SELECT asistenciagimnasio.asgFecha,persona.perPrimerNombre, persona.perSegundoNombre, persona.perPrimerApellido, persona.perSegundoApellido, ficha.ficNumero, persona.perNit FROM asistenciagimnasio INNER JOIN aprendiz ON asistenciagimnasio.idAprendiz = aprendiz.idAprendiz INNER JOIN persona ON aprendiz.idPersona = persona.idPersona INNER JOIN ficha ON ficha.idFicha = aprendiz.idFicha WHERE $campo = '$consulta'";
			
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;
				
		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;

	}



	function consultarMaquinaPersonalizada($campo, $consulta){

		try {

			$consulta = "SELECT maquina.maqNombre, maquina.maqCodigo, maquina.estado, maquina.maqDescripcion from maquina WHERE $campo = '$consulta'";
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;
				
		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;
	}


	function autocompletarMaquina($campo)
	{
		try{
			$consulta = "SELECT DISTINCT $campo FROM maquina";
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;

		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;
	
	}



	function autocompletarAsistencia($campo)
	{
		try{
			$consulta = "SELECT DISTINCT $campo FROM persona,ficha";
			$resultado=	$this->conexion->query($consulta);
			$this->retorno->datos= $resultado;

		} catch (PDOException $e) {
			$this->retorno->datos = $e->getMessage();
		}

		return $this->retorno;
	
	}

}
 ?>