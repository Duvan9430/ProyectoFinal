<?php

	/**
	 *
	 */
	class Rutina
	{
		private $conexion;
		private $retorno;

		function __construct()
		{
			$this->conexion =  Conexion::singleton();
			$this->retorno = new stdClass();

		}
		function ConsultarRutina(){
			try {
			$consulta = "SELECT  * FROM rutina, clasificacionrutina
                    WHERE rutina.idClasificacionRutina=clasificacionrutina.idClasificacionRutina";
			$resultado = $this->conexion->query($consulta);
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function lista(RutinaVista $registro){
			try {
				$consulta = "SELECT * FROM rutina  AS  R
												  INNER JOIN rutinaejercicio AS RE ON R.idRutina = RE.idRutina
													INNER JOIN ejercicio AS E ON RE.idEjercicio=E.idEjercicio
													WHERE R.idRutina=?
													AND R.estado='A'";
				$resultado = $this->conexion->prepare($consulta);
				$resultado->bindParam(1, $registro->getIdRutina());
				$resultado->execute();

				$this->retorno->datos = $resultado;
				$this->retorno->estado = true;
				$this->retorno->mensaje = "Consulta exitosa";
			} catch (Exception $e) {
				$this->retorno->datos = null;
				$this->retorno->estado = false;
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

	}


 ?>
