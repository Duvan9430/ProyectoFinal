<?php 

/**
* 
*/
class FichaE 
{
	
	private $idFicha;
	private $ficNombre;
	private $ficNumero;
	


    /**
     * @return mixed
     */
    public function getIdFicha()
    {
        return $this->idFicha;
    }

    /**
     * @param mixed $idFicha
     *
     * @return self
     */
    public function setIdFicha($idFicha)
    {
        $this->idFicha = $idFicha;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFicNombre()
    {
        return $this->ficNombre;
    }

    /**
     * @param mixed $ficNombre
     *
     * @return self
     */
    public function setFicNombre($ficNombre)
    {
        $this->ficNombre = $ficNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFicNumero()
    {
        return $this->ficNumero;
    }

    /**
     * @param mixed $ficNumero
     *
     * @return self
     */
    public function setFicNumero($ficNumero)
    {
        $this->ficNumero = $ficNumero;

        return $this;
    }


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