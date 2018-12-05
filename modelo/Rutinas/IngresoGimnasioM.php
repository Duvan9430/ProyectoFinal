<?php 

	class IngresoGimnasioM
	{
		private $conexion;
		private $retorno;
		
		function __construct()
		{
			$this->conexion = new Conexion();
			$this->retorno = new stdClass();
		}

		public function ConsultarPersona(RegistroGimnasioE $registro){
			try {
				$consulta = "SELECT aprendiz.idAprendiz FROM aprendiz INNER JOIN persona ON aprendiz.idPersona =  persona.idPersona WHERE persona.perNit = ?";
				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $registro->getPerNit());
				$resultado->execute();

				$this->retorno->datos = $resultado->fetchObject();
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Aprendiz existente.";
			} catch (Exception $e) {
				$this->retorno->datos = null;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}	
			return $this->retorno;
		}
		public function InsertarAsistencia(RegistroGimnasioE $registro){
			try {
				$consulta = "INSERT INTO asistenciagimnasio(idAsistenciaGimansio, idAprendiz, asgFecha) VALUES (null,?,CURDATE())";

				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $registro->getIdAprendiz());
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Aistencia correcta.";

			}catch (Exception $e){  
				$this->retorno->datos = null;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error: " .$e->getMessage();				
			}
			return $this->retorno;
		}
		public function consultarIdentificacion(){
			try {
				$consulta = "SELECT perNit FROM persona";

				$resultado = $this->conexion->query($consulta);
				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Bien";
			} catch (Exception $e) {
				$this->retorno->datos = null;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Mal";
			}
			return $this->retorno;
		}
		// public function ConsultarExistencia(RegistroGimnasioE $registro){
		// 	try {
		// 	 	$consulta = "SELECT asistencia.asgFecha AS fecha FROM asistenciagimnasio AS asistencia INNER JOIN aprendiz ON  asistencia.idAprendiz = aprendiz.idAprendiz INNER JOIN persona ON persona.idPersona = aprendiz.idPersona WHERE asistencia.asgFecha = CURDATE() AND persona.perNit = ?";
		// 		$resultado = $this->conexion->prepare($consulta);
		// 		$resultado->bindParam(1, $registro->getIdAprendiz());
		// 		$resultado->execute();


		// 		$this->retorno->datos = $resultado;
		// 		$this->retorno->estado = true;
		// 		$this->retorno->mensaje = "Good.";
		// 	 } catch (Exception $e) {
		// 	 	$this->retorno->datos = null;
		// 		$this->retorno->estado = false;
		// 		$this->retorno->mensaje = "Bad.";
		// 	 } 
		// 	return $this->retorno;
		// }
	}

 ?>