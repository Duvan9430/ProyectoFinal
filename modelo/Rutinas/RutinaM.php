<?php 


	class RutinaM
	{
		private $conexion;
		private $retorno;
		function __construct()
		{
			$this->conexion = new Conexion();
			$this->retorno = new stdClass();
		}

		public function CreateRutina(RutinaE $rutina){
			try {
				$consulta = "INSERT INTO rutina VALUES(NULL, ?, ?, 'A', NOW(), NOW(), -1, -1)";
				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $rutina->getIdClasificacion());
				$resultado->bindParam(2, $rutina->getRutNombre());
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Rutina creada.";
			} catch (Exception $e) {
				$this->retorno->datos = NULL;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Imposible crear rutina: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function ReadRutina()
		{
			try {
				$consulta = "SELECT rutina.idRutina, clasificacionrutina.clrNombre, rutina.rutNombre FROM rutina INNER JOIN clasificacionrutina ON rutina.idClasificacionRutina = clasificacionrutina.idClasificacionRutina  WHERE rutina.estado = 'A'";
				$resultado = $this->conexion->query($consulta);

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Consulta correcta.";
			} catch (Exception $e) {
				$this->retorno->datos = NULL;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error al consultar: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function UpdateRutina(RutinaE $rutina)
		{
			try {
				$consulta = "UPDATE rutina SET idClasificacionRutina = ?, rutNombre = ?, fechaModificacion = NOW(), usuarioModificacion = -1 WHERE idRutina = ?";
				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $rutina->getIdClasificacion());
				$resultado->bindParam(2, $rutina->getRutNombre());
				$resultado->bindParam(3, $rutina->getIdRutina());
				//$resultado->bindParam(3, $_POST['usuarioModificacion']);
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Rutina actualizada.";
			} catch (Exception $e) {
				$this->retorno->datos = NULL;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error al actualizar: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function DeleteRutina($id)
		{
			try {
				$consulta = "UPDATE rutina SET estado = 'I', fechaModificacion = NOW(), usuarioModificacion = -1 WHERE idRutina = ?";
				$resultado = $this->conexion->prepare($consulta);
				//$resultado->bindParam(1, $_POST['usuarioModificacion']);
				$resultado->bindParam(1, $id);
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Rutina eliminada.";
			} catch (Exception $e) {
				$this->retorno->datos = NULL;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error al eliminar: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function ReadRutinaModal($id)
		{
			try {
				$consulta = "SELECT * FROM rutina WHERE rutina.idRutina = ? AND rutina.estado = 'A'";
				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $id);
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Consulta correcta.";
			} catch (Exception $e) {
				$this->retorno->datos = NULL;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error al consultar: " .$e->getMessage();
			}
			return $this->retorno;
		}
	}

 ?>