
<?php

/**
 *
 */
class EjercicioMusculoM
{
	private $miConexion;
	private $retorno;


	function __construct()
	{
		$this->miConexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}


	public function ConsultarEjercicio()
	{
		try {
			$sentenciaSql = "SELECT * FROM ejercicio";
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

	public function ConsutarMusculo()
	{
		try {
			$sentenciaSql = "SELECT * FROM musculo";
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
	public function CreateEjercicioMusculo(EjercicioE $ejercicio)
	{
		try {

			$IdEjercicio=$ejercicio->getIdEjercicio();
			$ArrayMusculos=$ejercicio->getIdMusculo();
			$ArrayEjmFoto=$ejercicio->getEjmFoto();
			$ArrayEjmDescripcion=$ejercicio->getEjmDescripcion();

			$fin=count($ArrayMusculos);

			for ($i=0; $i < $fin ; $i++) {
				$idMusculo=(int)$ArrayMusculos[$i];
				$ejmDescripcion=$ArrayEjmDescripcion[$i];
				$ejmFoto=$ArrayEjmFoto[$i];
				$sentenciaSql = "INSERT INTO ejerciciomusculo(idEjercicioMusculo, idMusculo, idEjercicio, ejmDescripcion, ejmFoto, estado, fechaCreacion, fechaModificacion, usuarioCreacion, usuarioModificacion)
												 VALUES (null,?,?,?,?,'A',NOW(),NOW(),-1,-1)";

				$resultado= $this->miConexion->prepare($sentenciaSql);
				$resultado->bindParam(1, $idMusculo);
				$resultado->bindParam(2, $IdEjercicio);
				$resultado->bindParam(3, $ejmDescripcion);
				$resultado->bindParam(4, $ejmFoto);
				$resultado->execute();
			}



			$this->retorno->estado = true;
            $this->retorno->datos = $resultado;
            $this->retorno->mensaje = "Ejercicio Musculo creado.";
		}
		catch (PDOException $e) {
			$this->retorno->estado = false;
	    $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}

	public function Read()
	{
		try {
			$sentenciaSql = "SELECT ejm.idEjercicioMusculo, musculo.musNombre,
			 												ejercicio.ejeNombre, ejm.ejmFoto, ejm.ejmDescripcion
												FROM ejerciciomusculo as ejm, musculo, ejercicio
												WHERE ejm.idEjercicio=ejercicio.idEjercicio
												AND ejm.idMusculo=musculo.idMusculo
												AND ejm.estado='A'";
			$resultado = $this->miConexion->query($sentenciaSql);
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
	public function ReadUpdate(EjercicioMusculoE $ejercicioMusculoE)
	{
			//$ejeejejej=20;
		//	echo "--->".$ejeejejej;
		try {
			$sentenciaSql = "SELECT * FROM ejerciciomusculo
												WHERE idEjercicioMusculo=?";
					$resultado= $this->miConexion->prepare($sentenciaSql);
          $resultado->bindParam(1, $ejercicioMusculoE->getIdEjercicioMusculo());
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
	public function Update(EjercicioMusculoE $ejercicioMusculoE)
	{
		try {
			$ejer=$ejercicioMusculoE->getIdEjercicio();
			//echo "-----".$ejer;
			$imagenn=$ejercicioMusculoE->getEjmFoto();
			if($imagenn){
				$sentenciaSql = "UPDATE ejerciciomusculo
												SET idMusculo=?, idEjercicio=?, ejmDescripcion=?, ejmFoto=?,
												fechaModificacion=NOW(), usuarioModificacion=-1
												WHERE idEjercicioMusculo=?";

						$resultado= $this->miConexion->prepare($sentenciaSql);
						$resultado->bindParam(1, $ejercicioMusculoE->getIdMusculo());
						$resultado->bindParam(2, $ejercicioMusculoE->getIdEjercicio());
						$resultado->bindParam(3, $ejercicioMusculoE->getEjmDescripcion());
						$resultado->bindParam(4, $ejercicioMusculoE->getEjmFoto());
						$resultado->bindParam(5, $ejercicioMusculoE->getIdEjercicioMusculo());
					//	$resultado->execute();
			}
			else{
				$sentenciaSql = "UPDATE ejerciciomusculo
												SET idMusculo=?, idEjercicio=?, ejmDescripcion=?,
												fechaModificacion=NOW(), usuarioModificacion=-1
												WHERE idEjercicioMusculo=?";

												$resultado= $this->miConexion->prepare($sentenciaSql);
												$resultado->bindParam(1, $ejercicioMusculoE->getIdMusculo());
												$resultado->bindParam(2, $ejercicioMusculoE->getIdEjercicio());
												$resultado->bindParam(3, $ejercicioMusculoE->getEjmDescripcion());
												$resultado->bindParam(4, $ejercicioMusculoE->getIdEjercicioMusculo());

			}
			$resultado->execute();

			$this->retorno->estado = true;
      $this->retorno->datos = $resultado;
      $this->retorno->mensaje = "Ejercicio Musculo Editado.";
		}
		catch (PDOException $e) {
			$this->retorno->estado = false;
	    $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
	public function Delet(EjercicioMusculoE $ejercicioMusculoE)
	{
		try {

				$sentenciaSql = "UPDATE ejerciciomusculo
												SET estado='I'
												WHERE idEjercicioMusculo=?";

					$resultado= $this->miConexion->prepare($sentenciaSql);
					$resultado->bindParam(1, $ejercicioMusculoE->getIdEjercicioMusculo());

			$resultado->execute();

			$this->retorno->estado = true;
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Ejercicio Musculo Eliminado.";
		}
		catch (PDOException $e) {
			$this->retorno->estado = false;
			$this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}

}
 ?>
