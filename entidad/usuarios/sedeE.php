<?php
class sedeE
{
        	
        	private $idSede;
        	private $idCentroFormacion;
        	private $sedCodigo;
        	private $sedNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;
            


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
    public function getIdCentroFormacion()
    {
        return $this->idCentroFormacion;
    }

    /**
     * @param mixed $idCentroFormacion
     *
     * @return self
     */
    public function setIdCentroFormacion($idCentroFormacion)
    {
        $this->idCentroFormacion = $idCentroFormacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSedCodigo()
    {
        return $this->sedCodigo;
    }

    /**
     * @param mixed $sedCodigo
     *
     * @return self
     */
    public function setSedCodigo($sedCodigo)
    {
        $this->sedCodigo = $sedCodigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSedNombre()
    {
        return $this->sedNombre;
    }

    /**
     * @param mixed $sedNombre
     *
     * @return self
     */
    public function setSedNombre($sedNombre)
    {
        $this->sedNombre = $sedNombre;

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
