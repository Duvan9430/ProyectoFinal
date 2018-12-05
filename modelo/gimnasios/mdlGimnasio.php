<?php 
	
	class MdlGimnasio
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
			$this->retorno = new stdClass();
		}

		public function createGimnasio(EntGimnasio $gimnasio){
			try{
				$consulta = "INSERT INTO gimnasio values (null,?,?,?,?,'A',NOW(),NOW(),?,?)";
	            $resultado = $this->miConexion->prepare($consulta);
	            //$resultado->bindParam(1, $gimnasio->getIdGimnasio());
	            $resultado->bindParam(1, $gimnasio->getIdSede());
	            $resultado->bindParam(2, $gimnasio->getGimNombre());
	            $resultado->bindParam(3, $gimnasio->getGimDescripcion());
	            $resultado->bindParam(4, $gimnasio->getGimImagen());
	            $resultado->bindParam(5, $gimnasio->getUsuarioCreacion());
	            $resultado->bindParam(6, $gimnasio->getUsuarioModificacion());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
			}catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;
		}

		public function consultarGimnasio(){
			try{
				$consulta = "SELECT * FROM gimnasio
							INNER JOIN sede
							ON gimnasio.idSede = sede.idSede
							INNER JOIN centroformacion
							ON centroformacion.idCentroFormacion = sede.idCentroFormacion
							WHERE gimnasio.estado = 'A'";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del Gimnasio.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function consultarModal($id)
		{
			try{
				$consulta = "SELECT * FROM gimnasio
							INNER JOIN sede
							ON gimnasio.idSede = sede.idSede
							INNER JOIN centroformacion
							ON centroformacion.idCentroFormacion = sede.idCentroFormacion
							WHERE gimnasio.idGimnasio = ?";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1,$id);
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del gimnasio modal.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function consultaSede(){
			try{
				$consulta = "SELECT * FROM sede";
				$resultado = $this->miConexion->prepare($consulta);
				$resultado->execute();
				return $resultado->fetchAll(\PDO::FETCH_OBJ);
			}catch(PDOException $e){
				$this->retorno->estado = false;
				$this->retorno->mensaje = $e->getMessage();
			}
		}
		
		public function updateGimnasio(EntGimnasio $gimnasio){
			try {
				
				$consulta = "UPDATE gimnasio SET  idSede = ?, gimNombre = ?, gimDescripcion = ?, gimImagen = ? WHERE idGimnasio = ? ";
				$resultado = $this->miConexion->prepare($consulta);
				$resultado->bindParam(1, $gimnasio->getIdSede());
				$resultado->bindParam(2, $gimnasio->getGimNombre());
				$resultado->bindParam(3, $gimnasio->getGimDescripcion());
				$resultado->bindParam(4, $gimnasio->getGimImagen());
				$resultado->bindParam(5, $gimnasio->getIdGimnasio());

				$resultado->execute();
				$this->retorno->estado = true;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Gimnasio Modificado.";

			} catch (PDOException $e) {
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function deleteGimnasio($gimnasio){
			try {
				$consulta = "UPDATE gimnasio SET estado = 'I' WHERE idGimnasio = ? ";
				$resultado = $this->miConexion->prepare($consulta);
				$resultado->bindParam(1,$gimnasio->getIdGimnasio());
				$resultado->execute();

				$this->retorno->estado = true;
				 $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Gimnasio Eliminada.";
			} catch (PDOException $e) {
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}	
	}
?>