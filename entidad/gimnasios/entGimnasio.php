<?php 

/**
 * 
 */
class EntGimnasio
{
	private $idGimnasio;
	private $idSede;
	private $gimNombre;
	private $gimDescripcion;
	private $gimImagen;
	private $usuarioCreacion;
	private $usuarioModificacion;

    /**
     * @return mixed
     */
    public function getIdGimnasio()
    {
        return $this->idGimnasio;
    }

    /**
     * @param mixed $idGimnasio
     *
     * @return self
     */
    public function setIdGimnasio($idGimnasio)
    {
        $this->idGimnasio = $idGimnasio;

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
    public function getGimNombre()
    {
        return $this->gimNombre;
    }

    /**
     * @param mixed $gimNombre
     *
     * @return self
     */
    public function setGimNombre($gimNombre)
    {
        $this->gimNombre = $gimNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGimDescripcion()
    {
        return $this->gimDescripcion;
    }

    /**
     * @param mixed $gimDescripcion
     *
     * @return self
     */
    public function setGimDescripcion($gimDescripcion)
    {
        $this->gimDescripcion = $gimDescripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGimImagen()
    {
        return $this->gimImagen;
    }

    /**
     * @param mixed $gimImagen
     *
     * @return self
     */
    public function setGimImagen($gimImagen)
    {
        $this->gimImagen = $gimImagen;

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

    /**
     * @return mixed
     */
}

 ?>