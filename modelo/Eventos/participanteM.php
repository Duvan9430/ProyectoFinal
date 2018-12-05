<?php

	class ParticipanteM
	{
		private $miConexion;
		private $retorno;
		private $participantes;
		private $participantess;

		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}



	public function readEquipo()
		{
			try{
				$consulta = "SELECT idEquipo,equNombre FROM equipo WHERE estado= 'A'";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del equipo.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function autocomplete($nombre)
		{
			try{
				$consulta = "SELECT CONCAT(persona.perPrimerNombre,' ', persona.perPrimerApellido) as Nombres, persona.idPersona, aprendiz.idAprendiz , persona.perNit , ficha.ficNumero , tipodocumento.tidAbreviacion  FROM persona INNER JOIN aprendiz ON aprendiz.idPersona=persona.idPersona  INNER JOIN ficha ON aprendiz.idFicha=ficha.idFicha INNER JOIN tipodocumento ON tipodocumento.idTipoDocumento=persona.idTipoDocumento WHERE aprendiz.estado=persona.estado AND persona.perPrimerNombre LIKE CONCAT('%',:nombre,'%')";

				$resultado = $this->miConexion->prepare($consulta);
				$resultado->bindParam(':nombre',$nombre);
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del equipo.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function insert_participante(participanteE $participanteE){
			try {
					$this->participantes = $participanteE->getIdAprendiz();
					
					
				for ($i=0; $i < count($this->participantes); $i++) { 
					$consulta = "INSERT INTO participante values (null,?,?,'A',NOW(),NOW(),-1,-1)";
		            $resultado = $this->miConexion->prepare($consulta);
		            $resultado->bindParam(1, $this->participantes[$i]);
		            $resultado->bindParam(2, $participanteE->getIdEquipo());
		            $resultado->execute();
				}
	            
	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Participante agregado.";
	       }catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;

		}
		public function select_tablas(){
			try {
				// Aprendizzzz
				$consulta = "SELECT idAprendiz as Aprendiz, concat(perPrimerNombre, ' ', perPrimerApellido) as Nombres FROM aprendiz INNER JOIN persona ON aprendiz.idPersona = persona.idPersona";
				$resultado1 = $this->miConexion->query($consulta);

				$this->retorno->datosAprendiz = $resultado1;

				//Equipo
				$consulta = "SELECT equipo.idEquipo, equipo.equNombre, equipo.estado FROM equipo";
				$resultado2 = $this->miConexion->query($consulta);

				$this->retorno->datosEquipo = $resultado2;
				$this->retorno->estado = true;
	            $this->retorno->mensaje = "Ok.";
			} catch (Exception $e) {
				$this->retorno->datosEquipo = null;
				$this->retorno->estado = false;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function readNumeroParticipante($equipo){
			try{
				$consulta="SELECT torneo.torNombre,disciplina.disNumeroParticipantes FROM equipo INNER JOIN torneo ON equipo.idTorneo=torneo.idTorneo INNER JOIN disciplina on torneo.idDisciplina = disciplina.idDisciplina WHERE equipo.idEquipo=?;";

				$resultado = $this->miConexion->prepare($consulta);
		        $resultado->bindParam(1, $equipo);
		        $resultado->execute();

		        $this->retorno->estado = true;
		        $this->retorno->datos = $resultado;
		        $this->retorno->mensaje = "Ok.";
				} catch (Exception $e) {

				$this->retorno->estado = false;
		        $this->retorno->datos = null;
		        $this->retorno->mensaje = "Error: " .$e->getMessage();

				}
			return $this->retorno;
		}

	}
?>