<?php
class areaE
{
        	
        	private $idArea;
        	private $areNombre;
            private $UsuarioCreacion;
            private $UsuarioModificacion;

    

    /**
     * @return mixed
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * @param mixed $idArea
     *
     * @return self
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAreNombre()
    {
        return $this->areNombre;
    }

    /**
     * @param mixed $areNombre
     *
     * @return self
     */
    public function setAreNombre($areNombre)
    {
        $this->areNombre = $areNombre;

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