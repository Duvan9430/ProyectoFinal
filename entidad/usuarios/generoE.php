<?php
class generoE
{
        	
        	private $idGenero;
        	private $genNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;
            
            

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
    public function getGenNombre()
    {
        return $this->genNombre;
    }

    /**
     * @param mixed $genNombre
     *
     * @return self
     */
    public function setGenNombre($genNombre)
    {
        $this->genNombre = $genNombre;

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
