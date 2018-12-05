<?php 
/**
* 
*/
class TipoDocumentoE
{
	private $idTipoDocumeto;
	private $tidNombre;
    private $tidAbreviacion;
	private $UsuarioCreacion;
	private $UsuarioModificacion;

   

    /**
     * @return mixed
     */
    public function getIdTipoDocumeto()
    {
        return $this->idTipoDocumeto;
    }

    /**
     * @param mixed $idTipoDocumeto
     *
     * @return self
     */
    public function setIdTipoDocumeto($idTipoDocumeto)
    {
        $this->idTipoDocumeto = $idTipoDocumeto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTidNombre()
    {
        return $this->tidNombre;
    }

    /**
     * @param mixed $tidNombre
     *
     * @return self
     */
    public function setTidNombre($tidNombre)
    {
        $this->tidNombre = $tidNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTidAbreviacion()
    {
        return $this->tidAbreviacion;
    }

    /**
     * @param mixed $tidAbreviacion
     *
     * @return self
     */
    public function setTidAbreviacion($tidAbreviacion)
    {
        $this->tidAbreviacion = $tidAbreviacion;

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