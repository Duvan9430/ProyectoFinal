<?php 
	
		/**
	* 
	*/
	class mdlCrearRutina
	{
		private $conexion;
		private $retorno;

		function __construct()
		{
			$this->conexion= Conexion::singleton();
			$this->retorno= new stdClass();
		}

		function clasificacion(){
			try {

				$consulta ="SELECT `idClasificacionRutina`, `clrNombre`, `clrDescripcion` FROM clasificacionrutina ";
				$resultado= $this->conexion->query($consulta);
				$this->retorno->datos= $resultado;
				
			} catch (PDOException $e) {
				$this->retorno->datos=$e->getMessage();
			}

			return $this->retorno;
		}

		function crearRutina($idClasificacionRutina,$rutNombre){
			try{

				$consulta="INSERT INTO `rutina`(`idRutina`, `idClasificacionRutina`, `rutNombre`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES (null, ?,?,'A', NOW(), NOW(), -1, -1)";
				$resultado=$this->conexion->prepare($consulta);
			
				$resultado->bindParam(1,$idClasificacionRutina);
				$resultado->bindParam(2,$rutNombre);

				$resultado->execute();

					$id = $this->conexion->lastInsertId();

				
				$this->retorno->datos=$resultado;
				$this->retorno->mensaje='rutinaCreada';

			}catch(PDOException $e ){
				$this->retorno->mensaje = $e->getMessage();
			}

			return $this->retorno;
		}

		function consultarEjercicios(){
			try {
				$consulta = "SELECT * FROM `ejercicio` WHERE estado = 'A'";
				$resultado = $this->conexion->query($consulta);

				$this->retorno->datos =  $resultado;
			} catch (Exception $e) {
				$this->retorno->mensaje = $e->getMessage();			
			}

			return $this->retorno;
		}
	}

 ?>