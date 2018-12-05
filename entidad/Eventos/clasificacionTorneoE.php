<?php  
/**
 * 
 */
class ClasificacionTorneoE
{
	private $idClasificacionTorneo;
	private $claNombre;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;
    /**
     * @return mixed
     */
    public function getIdClasificacionTorneo()
    {
        return $this->idClasificacionTorneo;
    }

    /**
     * @param mixed $idClasificacionTorneo
     *
     * @return self
     */
    public function setIdClasificacionTorneo($idClasificacionTorneo)
    {
        $this->idClasificacionTorneo = $idClasificacionTorneo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClaNombre()
    {
        return $this->claNombre;
    }

    /**
     * @param mixed $claNombre
     *
     * @return self
     */
    public function setClaNombre($claNombre)
    {
        $this->claNombre = $claNombre;

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