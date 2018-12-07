<?php
class regimenE
{
        	
        	private $idRegimen;
          	private $regNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;
            
            

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
    public function getRegNombre()
    {
        return $this->regNombre;
    }

    /**
     * @param mixed $regNombre
     *
     * @return self
     */
    public function setRegNombre($regNombre)
    {
        $this->regNombre = $regNombre;

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