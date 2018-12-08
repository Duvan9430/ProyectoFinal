<?php 
	session_start();
	class RutinasAprendiz
	{
		private $conexion;
		private $retorno;
		
		function __construct()
		{
			$this->conexion =  Conexion::singleton();
			$this->retorno = new stdClass();
		
		} 
		function ConsultarAprendizRutina(){
			try {
				$idUsuario = $_SESSION["idUsuario"];
				$consulta = "
					SELECT rutina.rutNombre,ejercicio.ejeNombre,ejercicio.ejeDetalles,ejercicio.ejeImagen,seriesrepeticiones.series,seriesrepeticiones.repeticiones,seriesrepeticiones.tiempo
					FROM
					registrogimnasio
					INNER JOIN valoracion on  valoracion.idRegistroGimnasio = registrogimnasio.idRegistroGimnasio
					INNER JOIN valoracionrutina ON valoracionrutina.idValoracion = valoracion.idValoracion
					INNER JOIN seriesrepeticiones ON seriesrepeticiones.idValoracionRutina = valoracionrutina.idValoracionRutina
					INNER JOIN rutina ON rutina.idRutina = valoracionrutina.idRutina
					INNER JOIN rutinaejercicio ON rutinaejercicio.idRutina = rutina.idRutina
					INNER JOIN ejerciciomusculo ON ejerciciomusculo.idEjercicioMusculo =  rutinaejercicio.idEjercicio
					INNER JOIN ejercicio ON ejercicio.idEjercicio = ejerciciomusculo.idEjercicio
					WHERE registrogimnasio.idUsuario = $idUsuario";

				$resultado = $this->conexion->query($consulta);
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
				$this->retorno->datos = null;
				$this->retorno->mensaje= "Error: " .$e->getMessage();	
			}
			return $this->retorno;
		}
	
	}


 ?>