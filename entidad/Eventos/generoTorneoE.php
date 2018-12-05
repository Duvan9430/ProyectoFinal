<?php 

/**
 * 
 */
class GeneroTorneoE
{
	private $idGeneroTorneo;
	private $getNombre;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;

    /**
     * @return mixed
     */
    public function getIdGeneroTorneo()
    {
        return $this->idGeneroTorneo;
    }

    /**
     * @param mixed $idGeneroTorneo
     *
     * @return self
     */
    public function setIdGeneroTorneo($idGeneroTorneo)
    {
        $this->idGeneroTorneo = $idGeneroTorneo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGetNombre()
    {
        return $this->getNombre;
    }

    /**
     * @param mixed $getNombre
     *
     * @return self
     */
    public function setGetNombre($getNombre)
    {
        $this->getNombre = $getNombre;

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