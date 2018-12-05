<?php

/**
* }
*/
class EntMaquina
{
    private $idMaquina;
	private $maqNombre;
	private $maqCodigo;
    private $maqDescripcion;
    private $maqObservacion;
    private $maqImagen;
    private $usuarioCreacion;
    private $usuarioModificacion;


    


    

    /**
     * @return mixed
     */
    public function getIdMaquina()
    {
        return $this->idMaquina;
    }

    /**
     * @param mixed $idMaquina
     *
     * @return self
     */
    public function setIdMaquina($idMaquina)
    {
        $this->idMaquina = $idMaquina;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaqNombre()
    {
        return $this->maqNombre;
    }

    /**
     * @param mixed $maqNombre
     *
     * @return self
     */
    public function setMaqNombre($maqNombre)
    {
        $this->maqNombre = $maqNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaqCodigo()
    {
        return $this->maqCodigo;
    }

    /**
     * @param mixed $maqCodigo
     *
     * @return self
     */
    public function setMaqCodigo($maqCodigo)
    {
        $this->maqCodigo = $maqCodigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaqDescripcion()
    {
        return $this->maqDescripcion;
    }

    /**
     * @param mixed $maqDescripcion
     *
     * @return self
     */
    public function setMaqDescripcion($maqDescripcion)
    {
        $this->maqDescripcion = $maqDescripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaqObservacion()
    {
        return $this->maqObservacion;
    }

    /**
     * @param mixed $maqObservacion
     *
     * @return self
     */
    public function setMaqObservacion($maqObservacion)
    {
        $this->maqObservacion = $maqObservacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaqImagen()
    {
        return $this->maqImagen;
    }

    /**
     * @param mixed $maqImagen
     *
     * @return self
     */
    public function setMaqImagen($maqImagen)
    {
        $this->maqImagen = $maqImagen;

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