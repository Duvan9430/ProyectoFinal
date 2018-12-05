<?php 

class LugarE
{
	private $idLugar;
	private $idMunicipio;
	private $lugNombre;
	private $lugDireccion;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;

    /**
     * @return mixed
     */
    public function getIdLugar()
    {
        return $this->idLugar;
    }

    /**
     * @param mixed $idLugar
     *
     * @return self
     */
    public function setIdLugar($idLugar)
    {
        $this->idLugar = $idLugar;

        return $this;
    }

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
    public function getLugNombre()
    {
        return $this->lugNombre;
    }

    /**
     * @param mixed $lugNombre
     *
     * @return self
     */
    public function setLugNombre($lugNombre)
    {
        $this->lugNombre = $lugNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugDireccion()
    {
        return $this->lugDireccion;
    }

    /**
     * @param mixed $lugDireccion
     *
     * @return self
     */
    public function setLugDireccion($lugDireccion)
    {
        $this->lugDireccion = $lugDireccion;

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