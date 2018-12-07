<?php
	class MdlPersona
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}
		//SELECT idPersona FROM persona ORDER BY idPersona DESC LIMIT 1
		public function createPersona(EntPersona $persona){
			try {
			 $this->miConexion->beginTransaction();
			 $consulta = "INSERT INTO persona (`idPersona`, `idMunicipioNacimiento`, `idMunicipioResidencia`, `idTipoDocumento`, `idGrupoSanguineo`, `idGenero`, `idSede`, `idEps`, `idRegimen`, `perNit`, `perPrimerNombre`, `perSegundoNombre`, `perPrimerApellido`, `perSegundoApellido`, `perFechaNacimiento`, `perTelefono`, `perCelular`, `perCorreoElectronico`, `perDireccion`, `perFoto`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) values (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'A',NOW(),NOW(),-1,-1)";
	            $resultado = $this->miConexion->prepare($consulta);
	          	$resultado->bindParam(1, $persona->getIdMunicipioNacimiento());
	            $resultado->bindParam(2, $persona->getIdMunicipioResidencia());
	            $resultado->bindParam(3, $persona->getIdTipoDocumento());
	            $resultado->bindParam(4, $persona->getIdGrupoSanguineo());
	            $resultado->bindParam(5, $persona->getIdGenero());
	            $resultado->bindParam(6, $persona->getIdSede());
	            $resultado->bindParam(7, $persona->getIdEps());
	            $resultado->bindParam(8, $persona->getIdRegimen());
	            $resultado->bindParam(9, $persona->getPerNit());
	            $resultado->bindParam(10, $persona->getPerPrimerNombre());
	            $resultado->bindParam(11, $persona->getPerSegundoNombre());
	            $resultado->bindParam(12, $persona->getPerPrimerApellido());
	            $resultado->bindParam(13, $persona->getPerSegundoApellido());
	            $resultado->bindParam(14, $persona->getPerFechaNacimiento());
	            $resultado->bindParam(15, $persona->getPerTelefono());
	            $resultado->bindParam(16, $persona->getPerCelular());
	            $resultado->bindParam(17, $persona->getPerCorreoElectronico());
	            $resultado->bindParam(18, $persona->getPerDireccion());
	            $resultado->bindParam(19, $persona->getPerFoto());
	            $resultado->execute();
	            $tipo=$persona->getIdAprendiz();
	            $idPersona=  $this->miConexion->lastInsertId();
	            if ($tipo==2) {
	            	$consulta= "INSERT INTO `aprendiz`(`idAprendiz`, `idPersona`, `idFicha`, `aprDiscapacidad`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES (null,?,?,?,'A',NOW(),NOW(),-1,-1)";
	            	$resultado = $this->miConexion->prepare($consulta);
	            	$resultado->bindParam(1, $idPersona);
	            	$resultado->bindParam(2, $persona->getIdFicha());
	            	$resultado->bindParam(3, $persona->getAprDiscapacidad());
	            	$resultado->execute();
	            }elseif ($tipo==3) {
	            	$consulta="INSERT INTO `bienestar`(`idBienestar`, `idPersona`, `idArea`, `estado`, `fechaCreacion`, `fechaModificacion`, `usuarioCreacion`, `usuarioModificacion`) VALUES (null,?,?,'A',NOW(),NOW(),-1,-1)";
	            	$resultado = $this->miConexion->prepare($consulta);
	            	$resultado->bindParam(1, $idPersona);
	            	$resultado->bindParam(2, $persona->getIdArea());
	            	$resultado->execute();
	            }
	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la persona.";
	            $this->miConexion->commit();
	       }catch(PDOException $e){
	      	 	$this->miConexion->rollBack();
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       		
	       }
	       return $this->retorno;
		}

	
    	public function consultarPersona(){
			try{
				$consulta = "SELECT * FROM persona INNER JOIN municipio ON persona.idMunicipioResidencia = municipio.idMunicipio INNER JOIN tipodocumento ON persona.idTipoDocumento = tipodocumento.idTipoDocumento INNER JOIN gruposanguineo ON persona.idGrupoSanguineo = gruposanguineo.idGrupoSanguineo INNER JOIN genero ON persona.idGenero = genero.idGenero INNER JOIN sede ON persona.idSede = sede.idSede INNER JOIN eps ON persona.idEps = eps.idEps INNER JOIN regimen ON persona.idRegimen = regimen.idRegimen WHERE persona.Estado='A'";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la persona.";
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
				$consulta = "SELECT * FROM persona INNER JOIN municipio ON persona.idMunicipioResidencia = municipio.idMunicipio INNER JOIN tipodocumento ON persona.idTipoDocumento = tipodocumento.idTipoDocumento INNER JOIN gruposanguineo ON persona.idGrupoSanguineo = gruposanguineo.idGrupoSanguineo INNER JOIN genero ON persona.idGenero = genero.idGenero INNER JOIN sede ON persona.idSede = sede.idSede INNER JOIN eps ON persona.idEps = eps.idEps INNER JOIN regimen ON persona.idRegimen = regimen.idRegimen WHERE persona.Estado='A'";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1,$id);
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la persona modal.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function updatePersona(EntPersona $persona){
			try{
				$consulta = "UPDATE persona SET  idMunicipioNacimiento = ?,idMunicipioResidencia = ?, idTipoDocumento = ?, idGrupoSanguineo= ?, idGenero = ?, idSede = ?, idEps = ?, idRegimen = ?, perNit = ?, perPrimerNombre = ?, perSegundoNombre = ?, perPrimerApellido = ?, perSegundoApellido = ?, perFechaNacimiento = ?, perTelefono = ?, perCelular = ?, perCorreoElectronico = ?, perDireccion = ?,perFoto=?  WHERE idPersona = ?";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $persona->getIdMunicipioNacimiento());
	            $resultado->bindParam(2, $persona->getIdMunicipioResidencia());
	            $resultado->bindParam(3, $persona->getIdTipoDocumento());
	            $resultado->bindParam(4, $persona->getIdGrupoSanguineo());
	            $resultado->bindParam(5, $persona->getIdGenero());
	            $resultado->bindParam(6, $persona->getIdSede());
	            $resultado->bindParam(7, $persona->getIdEps());
	            $resultado->bindParam(8, $persona->getIdRegimen());
	            $resultado->bindParam(9, $persona->getPerNit());
	            $resultado->bindParam(10, $persona->getPerPrimerNombre());
	            $resultado->bindParam(11, $persona->getPerSegundoNombre());
	            $resultado->bindParam(12, $persona->getPerPrimerApellido());
	            $resultado->bindParam(13, $persona->getPerSegundoApellido());
	            $resultado->bindParam(14, $persona->getPerFechaNacimiento());
	            $resultado->bindParam(15, $persona->getPerTelefono());
	            $resultado->bindParam(16, $persona->getPerCelular());
	            $resultado->bindParam(17, $persona->getPerCorreoElectronico());
	            $resultado->bindParam(18, $persona->getPerDireccion());
	            $resultado->bindParam(18, $persona->getPerFoto());
	            $resultado->bindParam(19, $persona->getIdPersona());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "persona modificada.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function deletePersona($persona){
			try{
				$consulta = "UPDATE persona SET estado = 'I' WHERE idPersona = ?";
				$resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $persona->getIdPersona());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "persona Eliminada.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
	}
?>