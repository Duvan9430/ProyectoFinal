<?php  
class DepartamentoE
{
	private $idDepartamento;
	private $idPais;
	private $depNombre;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;


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
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * @param mixed $idPais
     *
     * @return self
     */
    public function setIdPais($idPais)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepNombre()
    {
        return $this->depNombre;
    }

    /**
     * @param mixed $depNombre
     *
     * @return self
     */
    public function setDepNombre($depNombre)
    {
        $this->depNombre = $depNombre;

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