<?php 

/**
 * 
 */
class MunicipioE
{
	private $idMunicipio;
	private $idDepartamento;
	private $munCodigo;
	private $munNombre;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;
	
	

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * @param mixed $idMunicipio
     *
     * @return self
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * @param mixed $idDepartamento
     *
     * @return self
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunCodigo()
    {
        return $this->munCodigo;
    }

    /**
     * @param mixed $munCodigo
     *
     * @return self
     */
    public function setMunCodigo($munCodigo)
    {
        $this->munCodigo = $munCodigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunNombre()
    {
        return $this->munNombre;
    }

    /**
     * @param mixed $munNombre
     *
     * @return self
     */
    public function setMunNombre($munNombre)
    {
        $this->munNombre = $munNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param mixed $fechaCreacion
     *
     * @return self
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * @param mixed $fechaModificacion
     *
     * @return self
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }

    /**
     * @param mixed $usuarioCreacion
     *
     * @return self
     */
    public function setUsuarioCreacion($usuarioCreacion)
    {
        $this->usuarioCreacion = $usuarioCreacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioModificacion()
    {
        return $this->usuarioModificacion;
    }

    /**
     * @param mixed $usuarioModificacion
     *
     * @return self
     */
    public function setUsuarioModificacion($usuarioModificacion)
    {
        $this->usuarioModificacion = $usuarioModificacion;

        return $this;
    }
}


?>