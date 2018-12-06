<?php
class epsE
{
        	
        	private $idEps;
        	private $epsCodigo;
        	private $epsNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;
            
            

    /**
     * @return mixed
     */
    public function getIdEps()
    {
        return $this->idEps;
    }

    /**
     * @param mixed $idEps
     *
     * @return self
     */
    public function setIdEps($idEps)
    {
        $this->idEps = $idEps;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEpsCodigo()
    {
        return $this->epsCodigo;
    }

    /**
     * @param mixed $epsCodigo
     *
     * @return self
     */
    public function setEpsCodigo($epsCodigo)
    {
        $this->epsCodigo = $epsCodigo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEpsNombre()
    {
        return $this->epsNombre;
    }

    /**
     * @param mixed $epsNombre
     *
     * @return self
     */
    public function setEpsNombre($epsNombre)
    {
        $this->epsNombre = $epsNombre;

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
