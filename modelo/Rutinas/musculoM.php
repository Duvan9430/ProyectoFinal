<?php

class MusculoM
{
	private $miConexion;
	private $retorno;


	function __construct()
	{
		$this->miConexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	public function Create(MusculoE $musculo)
	{
		try {
				//echo "---->".$clasi=$musculo->getClasificacionMusculo();
			$sentenciaSql = "INSERT INTO musculo(idMusculo, idClasificacionMusculo, musNombre, estado, fechaCreacion, fechaModificacion, usuarioCreacion, usuarioModificacion)
			 VALUES (null,?,?,'A',NOW(),NOW(),-1,-1)";
			$resultado = $this->miConexion->prepare($sentenciaSql);
			$resultado->bindParam(1, $musculo->getClasificacionMusculo());
			$resultado->bindParam(2, $musculo->getUsuNombre());
			$resultado->execute();


			$this->retorno->estado = true;
            $this->retorno->datos = $resultado;
            $this->retorno->mensaje = "Musculo creado.";

		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function read()
	{
		try {
			$sentenciaSql = "SELECT M.idMusculo, CM.clmNombre, M.musNombre FROM musculo M INNER JOIN clasificacionmusculo CM ON M.idClasificacionMusculo = CM.idClasificacionMusculo
												WHERE M.estado='A'";
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
	public function ClasificacionMusculo()
	{
		try {
			$sentenciaSql = "SELECT * FROM clasificacionmusculo";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Clasificaciones cargadas.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function ReadUpdate(MusculoE $musculoE){
	try {
		$sentenciaSql = "SELECT  musculo.idMusculo, musculo.idClasificacionMusculo, clasificacionmusculo.clmNombre, musculo.musNombre FROM musculo
											INNER JOIN clasificacionmusculo
											ON clasificacionmusculo.idClasificacionMusculo = musculo.idClasificacionMusculo
											WHERE idMusculo=?";
				$resultado= $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $musculoE->getIdMusculo());
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
public function Update(MusculoE $musculo)
{
	try {
		$sentenciaSql = "UPDATE musculo SET idClasificacionMusculo=?,
											musNombre=?,
											fechaModificacion=NOW(),
											usuarioModificacion=-1
											WHERE idMusculo=?";
		$resultado = $this->miConexion->prepare($sentenciaSql);
		$resultado->bindParam(1, $musculo->getClasificacionMusculo());
		$resultado->bindParam(2, $musculo->getUsuNombre());
		$resultado->bindParam(3, $musculo->getIdMusculo());
		$resultado->execute();


		$this->retorno->estado = true;
					$this->retorno->datos = $resultado;
					$this->retorno->mensaje = "Musculo Modificado.";

	} catch (PDOException $e) {
		$this->retorno->estado = false;
				$this->retorno->datos = null;
		$this->retorno->mensaje = "Error: " .$e->getMessage();
	}
	return $this->retorno;
}
public function Delet(MusculoE $musculo)
{
	try {
		$sentenciaSql = "UPDATE musculo SET estado='I'
											WHERE idMusculo=?";
		$resultado = $this->miConexion->prepare($sentenciaSql);
		$resultado->bindParam(1, $musculo->getIdMusculo());
		$resultado->execute();


		$this->retorno->estado = true;
					$this->retorno->datos = $resultado;
					$this->retorno->mensaje = "Musculo Eliminado.";

	} catch (PDOException $e) {
		$this->retorno->estado = false;
				$this->retorno->datos = null;
		$this->retorno->mensaje = "Error: " .$e->getMessage();
	}
	return $this->retorno;
}

}
 ?>
