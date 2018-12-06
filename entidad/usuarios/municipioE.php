
<?php 


class municipioE
{
        	
        	private $idMunicipio;
        	private $idDepartamento;
            private $munCodigoDane;
            private $munNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;


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
    public function getMunCodigoDane()
    {
        return $this->munCodigoDane;
    }

    /**
     * @param mixed $munCodigoDane
     *
     * @return self
     */
    public function setMunCodigoDane($munCodigoDane)
    {
        $this->munCodigoDane = $munCodigoDane;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunNombre()
    {
        return $this->munNombre;
    }

    /**
     * @param mixed $munNombre
     *
     * @return self
     */
    public function setMunNombre($munNombre)
    {
        $this->munNombre = $munNombre;

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
