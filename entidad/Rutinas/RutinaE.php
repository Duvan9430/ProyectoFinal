<?php 	

	
	class RutinaE
	{
        private $idRutina;
		private $idClasificacion;
		private $rutNombre;		
		private $usuarioModificacion;
    /**
     * @return mixed
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * @param mixed $idClasificacion
     *
     * @return self
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRutNombre()
    {
        return $this->rutNombre;
    }

    /**
     * @param mixed $rutNombre
     *
     * @return self
     */
    public function setRutNombre($rutNombre)
    {
        $this->rutNombre = $rutNombre;

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
    public function getIdRutina()
    {
        return $this->idRutina;
    }

    /**
     * @param mixed $idRutina
     *
     * @return self
     */
    public function setIdRutina($idRutina)
    {
        $this->idRutina = $idRutina;

        return $this;
    }
}

 ?>