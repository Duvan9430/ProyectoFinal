<?php

	/**
	 *
	 */
	class EjercicioXclasificacion
	{
		private $conexion;
		private $retorno;

		function __construct()
		{
			$this->conexion =  Conexion::singleton();
			$this->retorno = new stdClass();

		}
		function EjercicioEspalda(){
			try {
			$consulta = "SELECT * FROM ejercicio AS E INNER JOIN ejerciciomusculo AS EM
                      ON E.idEjercicio=EM.idEjercicio
                      INNER JOIN musculo AS M ON EM.idMusculo=M.idMusculo
                      WHERE EM.estado='A'
                      AND M.idClasificacionMusculo=2";
			$resultado = $this->conexion->query($consulta);
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
    function EjercicioPecho(){
			try {
			$consulta = "SELECT * FROM ejercicio AS E INNER JOIN ejerciciomusculo AS EM
                      ON E.idEjercicio=EM.idEjercicio
                      INNER JOIN musculo AS M ON EM.idMusculo=M.idMusculo
                      WHERE EM.estado='A'
                      AND M.idClasificacionMusculo=1";
			$resultado = $this->conexion->query($consulta);
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
    function EjercicioPierna(){
			try {
			$consulta = "SELECT * FROM ejercicio AS E INNER JOIN ejerciciomusculo AS EM
                      ON E.idEjercicio=EM.idEjercicio
                      INNER JOIN musculo AS M ON EM.idMusculo=M.idMusculo
                      WHERE EM.estado='A'
                      AND M.idClasificacionMusculo=3";
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
