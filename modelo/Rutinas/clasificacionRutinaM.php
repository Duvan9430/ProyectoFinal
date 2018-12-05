<?php

/**
 *
 */
class ClasificacionRutinaM
{
	private $miConexion;
	private $retorno;


	function __construct()
	{
		$this->miConexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	public function Create(ClasificacionRutinaE $clasificacionRutinaE)
		{
			try {

				$sentenciaSql = "INSERT INTO `clasificacionrutina`(`idClasificacionRutina`, `clrNombre`, `clrDescripcion`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`)
                          VALUES (null,?,?,'A',NOW(),NOW(),-1,-1)";
				$resultado = $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $clasificacionRutinaE->getClrNombre());
				$resultado->bindParam(2, $clasificacionRutinaE->getClrDescripcion());
				$resultado->execute();


				$this->retorno->estado = true;
        $this->retorno->datos = $resultado;
        $this->retorno->mensaje = "Clasificacion Rutina creado.";

			} catch (PDOException $e) {
				$this->retorno->estado = false;
		        $this->retorno->datos = null;
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

	public function Read()
	{
		try {
			$sentenciaSql = "SELECT * FROM clasificacionrutina";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Clasificacion cargada.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}




}
 ?>
