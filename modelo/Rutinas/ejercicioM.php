<?php

/**
 *
 */
class EjercicioM
{
	private $miConexion;
	private $retorno;


	function __construct()
	{
		$this->miConexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	public function Create(EjercicioE $ejercicio)
		{
			try {

				$sentenciaSql = "INSERT INTO `ejercicio`(`idEjercicio`, `idTipoEjercicio`, `ejeNombre`, `ejeDetalles`, `ejeImagen`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioModificacion`, `usuarioCreacion`) VALUES (null,?,?,?,?,'A',NOW(),NOW(),1,1)";
				$resultado = $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $ejercicio->getTipoEjercicio());
				$resultado->bindParam(2, $ejercicio->getEjeNombre());
				$resultado->bindParam(3, $ejercicio->getEjeDetalle());
				$resultado->bindParam(4, $ejercicio->getEjeImagen());
				$resultado->execute();


				$this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Ejercicio creado.";

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
			$sentenciaSql = "SELECT TP.tieNombre,  E.idEjercicio, E.ejeNombre, E.ejeDetalles, E.ejeImagen FROM ejercicio AS E
							INNER JOIN tipoejercicio AS TP ON E.idTipoEjercicio = TP.idTipoEjercicio
							WHERE E.estado='A'";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Ejercicios cargados.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function ConsultarMusculo()
	{
		try {
			$sentenciaSql = "SELECT * FROM musculo WHERE estado='A'";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Musculos cargados.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}


	public function ConsultarMaquinas()
	{
		try {
			$sentenciaSql = "SELECT * FROM maquina";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Good.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function ConsultarTipoEjercicio()
	{
		try {
			$sentenciaSql = "SELECT * FROM tipoejercicio";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Good.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function ReadUpdate(EjercicioE $ejercicioE){
	try {
		$sentenciaSql = "SELECT * FROM ejercicio, tipoejercicio
											WHERE ejercicio.idTipoEjercicio=tipoejercicio.idTipoEjercicio
											AND idEjercicio=?";
				$resultado= $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $ejercicioE->getIdEjercicio());
				$resultado->execute();

				$this->retorno->estado = true;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Datos Cargados.";
	} catch (PDOException $e) {
		$this->retorno->estado = false;
				$this->retorno->datos = null;
		$this->retorno->mensaje = "Error: " .$e->getMessage();
	}
	return $this->retorno;
}
public function Upddate(EjercicioE $ejercicio)
	{
		try {
			$ejercicioID=$ejercicio->getIdEjercicio();
			$imagen=$ejercicio->getEjeImagen();
			//echo "-->EjercicioId--->".$ejercicioID;

			if ($imagen=='') {
				$sentenciaSql = "UPDATE ejercicio SET
															idTipoEjercicio=?,ejeNombre=?,ejeDetalles=?,
															fechaModificacion=NOW(),usuarioModificacion=-1
															 WHERE idEjercicio=?";
				$resultado = $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $ejercicio->getTipoEjercicio());
				$resultado->bindParam(2, $ejercicio->getEjeNombre());
				$resultado->bindParam(3, $ejercicio->getEjeDetalle());
				$resultado->bindParam(4, $ejercicio->getIdEjercicio());

			}
			else{
				$sentenciaSql = "UPDATE ejercicio SET
															idTipoEjercicio=?,ejeNombre=?,ejeDetalles=?,
															ejeImagen=?,
															fechaModificacion=NOW(),usuarioModificacion=-1
															 WHERE idEjercicio=?";
				$resultado = $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $ejercicio->getTipoEjercicio());
				$resultado->bindParam(2, $ejercicio->getEjeNombre());
				$resultado->bindParam(3, $ejercicio->getEjeDetalle());
				$resultado->bindParam(4, $ejercicio->getEjeImagen());
				$resultado->bindParam(5, $ejercicio->getIdEjercicio());
			}
			$resultado->execute();

			$this->retorno->estado = true;
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Ejercicio Modificado.";

		} catch (PDOException $e) {
			$this->retorno->estado = false;
					$this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function Delet(EjercicioE $ejercicio)
		{
			try {

				$sentenciaSql = "UPDATE ejercicio SET
															estado='I'
															 WHERE idEjercicio=?";
				$resultado = $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $ejercicio->getIdEjercicio());


				$resultado->execute();

				$this->retorno->estado = true;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Ejercicio Eliminado.";

			} catch (PDOException $e) {
				$this->retorno->estado = false;
						$this->retorno->datos = null;
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

}
 ?>
