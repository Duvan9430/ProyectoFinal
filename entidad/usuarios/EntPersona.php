<?php

/**
* }
*/
class EntPersona
{
    private $idPersona;
            private $idMunicipioNacimiento;
            private $idMunicipioResidencia;
            private $idTipoDocumento;
            private $idGrupoSanguineo;
            private $idGenero;
            private $idSede;
            private $idEps;
            private $idRegimen;
            private $perNit;
            private $perPrimerNombre;
            private $perSegundoNombre;
            private $perPrimerApellido;
            private $perSegundoApellido;
            private $perFechaNacimiento;
            private $perTelefono;
            private $perCelular;
            private $perCorreoElectronico;
            private $perDireccion;
            private $perFoto;
            private $UsuarioCreacion;
            private $UsuarioModificacion;   
            private $idAprendiz;
            private $idBienestar;
            private $idArea;
            private $idFicha;
            private $aprDiscapacidad;
 public function getIdBienestar()
    {
        return $this->idBienestar;
    }

    /**
     * @param mixed $idBienestar
     *
     * @return self
     */
    public function setIdBienestar($idBienestar)
    {
        $this->idBienestar = $idBienestar;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * @param mixed $idArea
     *
     * @return self
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * @return mixed


    /**
     * @return mixed
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }

    /**
     * @param mixed $idFicha
     *
     * @return self
     */
    public function setIdFicha($idFicha)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAprDiscapacidad()
    {
        return $this->aprDiscapacidad;
    }

    /**
     * @param mixed $aprDiscapacidad
     *
     * @return self
     */
    public function setAprDiscapacidad($aprDiscapacidad)
    {
        $this->aprDiscapacidad = $aprDiscapacidad;

        return $this;
    }           
public function getIdAprendiz()
    {
        return $this->idAprendiz;
    }

    /**
     * @param mixed $idPersona
     *
     * @return self
     */
    public function setIdAprendiz($idAprendiz)
    {
        $this->idAprendiz = $idAprendiz;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param mixed $idPersona
     *
     * @return self
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipioNacimiento()
    {
        return $this->idMunicipioNacimiento;
    }

    /**
     * @param mixed $idMunicipioNacimiento
     *
     * @return self
     */
    public function setIdMunicipioNacimiento($idMunicipioNacimiento)
    {
        $this->idMunicipioNacimiento = $idMunicipioNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipioResidencia()
    {
        return $this->idMunicipioResidencia;
    }

    /**
     * @param mixed $idMunicipioRecidencia
     *
     * @return self
     */
    public function setIdMunicipioResidencia($idMunicipioResidencia)
    {
        $this->idMunicipioResidencia = $idMunicipioResidencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoDocumento()
    {
        return $this->idTipoDocumento;
    }

    /**
     * @param mixed $idTipoDocumento
     *
     * @return self
     */
    public function setIdTipoDocumento($idTipoDocumento)
    {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdGrupoSanguineo()
    {
        return $this->idGrupoSanguineo;
    }

    /**
     * @param mixed $idGrupoSanguineo
     *
     * @return self
     */
    public function setIdGrupoSanguineo($idGrupoSanguineo)
    {
        $this->idGrupoSanguineo = $idGrupoSanguineo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    /**
     * @param mixed $idGenero
     *
     * @return self
     */
    public function setIdGenero($idGenero)
    {
        $this->idGenero = $idGenero;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdSede()
    {
        return $this->idSede;
    }

    /**
     * @param mixed $idSede
     *
     * @return self
     */
    public function setIdSede($idSede)
    {
        $this->idSede = $idSede;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEps()
    {
        return $this->idEps;
    }

    /**
     * @param mixed $idEps
     *
     * @return self
     */
    public function setIdEps($idEps)
    {
        $this->idEps = $idEps;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdRegimen()
    {
        return $this->idRegimen;
    }

    /**
     * @param mixed $idRegimen
     *
     * @return self
     */
    public function setIdRegimen($idRegimen)
    {
        $this->idRegimen = $idRegimen;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerNit()
    {
        return $this->perNit;
    }

    /**
     * @param mixed $perNit
     *
     * @return self
     */
    public function setPerNit($perNit)
    {
        $this->perNit = $perNit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerPrimerNombre()
    {
        return $this->perPrimerNombre;
    }

    /**
     * @param mixed $perPrimerNombre
     *
     * @return self
     */
    public function setPerPrimerNombre($perPrimerNombre)
    {
        $this->perPrimerNombre = $perPrimerNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerSegundoNombre()
    {
        return $this->perSegundoNombre;
    }

    /**
     * @param mixed $perSegundoNombre
     *
     * @return self
     */
    public function setPerSegundoNombre($perSegundoNombre)
    {
        $this->perSegundoNombre = $perSegundoNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerPrimerApellido()
    {
        return $this->perPrimerApellido;
    }

    /**
     * @param mixed $perPrimerApellido
     *
     * @return self
     */
    public function setPerPrimerApellido($perPrimerApellido)
    {
        $this->perPrimerApellido = $perPrimerApellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerSegundoApellido()
    {
        return $this->perSegundoApellido;
    }

    /**
     * @param mixed $perSegundoApellido
     *
     * @return self
     */
    public function setPerSegundoApellido($perSegundoApellido)
    {
        $this->perSegundoApellido = $perSegundoApellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerFechaNacimiento()
    {
        return $this->perFechaNacimiento;
    }

    /**
     * @param mixed $perFechaNacimiento
     *
     * @return self
     */
    public function setPerFechaNacimiento($perFechaNacimiento)
    {
        $this->perFechaNacimiento = $perFechaNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerTelefono()
    {
        return $this->perTelefono;
    }

    /**
     * @param mixed $perTelefono
     *
     * @return self
     */
    public function setPerTelefono($perTelefono)
    {
        $this->perTelefono = $perTelefono;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerCelular()
    {
        return $this->perCelular;
    }

    /**
     * @param mixed $perCelular
     *
     * @return self
     */
    public function setPerCelular($perCelular)
    {
        $this->perCelular = $perCelular;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerCorreoElectronico()
    {
        return $this->perCorreoElectronico;
    }

    /**
     * @param mixed $perCorreoElectronico
     *
     * @return self
     */
    public function setPerCorreoElectronico($perCorreoElectronico)
    {
        $this->perCorreoElectronico = $perCorreoElectronico;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerDireccion()
    {
        return $this->perDireccion;
    }

    /**
     * @param mixed $perDireccion
     *
     * @return self
     */
    public function setPerDireccion($perDireccion)
    {
        $this->perDireccion = $perDireccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerFoto()
    {
        return $this->perFoto;
    }

    /**
     * @param mixed $perFoto
     *
     * @return self
     */
    public function setPerFoto($perFoto)
    {
        $this->perFoto = $perFoto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioCreacion()
    {
        return $this->UsuarioCreacion;
    }

    /**
     * @param mixed $UsuarioCreacion
     *
     * @return self
     */
    public function setUsuarioCreacion($UsuarioCreacion)
    {
        $this->UsuarioCreacion = $UsuarioCreacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioModificacion()
    {
        return $this->UsuarioModificacion;
    }

    /**
     * @param mixed $UsuarioModificacion
     *
     * @return self
     */
    public function setUsuarioModificacion($UsuarioModificacion)
    {
        $this->UsuarioModificacion = $UsuarioModificacion;

        return $this;
    }
}
?>