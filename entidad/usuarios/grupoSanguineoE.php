<?php
class grupoSanguineoE
{
        	
        	private $idSrupoSanguineo;
        	private $grsNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;

    
    public function getIdSrupoSanguineo()
    {
        return $this->idSrupoSanguineo;
    }

    /**
     * @param mixed $idSrupoSanguineo
     *
     * @return self
     */
    public function setIdSrupoSanguineo($idSrupoSanguineo)
    {
        $this->idSrupoSanguineo = $idSrupoSanguineo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrsNombre()
    {
        return $this->grsNombre;
    }

    /**
     * @param mixed $grsNombre
     *
     * @return self
     */
    public function setGrsNombre($grsNombre)
    {
        $this->grsNombre = $grsNombre;

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

