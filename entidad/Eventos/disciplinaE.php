<?php 

/**
 * 
 */
class DisciplinaE
{
	private $idDisciplina;
    private $idTipoDeporte;
	private $disNombre;
    private $disNumeroParticipantes;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;



    /**
     * @return mixed
     */
    public function getIdDisciplina()
    {
        return $this->idDisciplina;
    }

    /**
     * @param mixed $idDisciplina
     *
     * @return self
     */
    public function setIdDisciplina($idDisciplina)
    {
        $this->idDisciplina = $idDisciplina;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoDeporte()
    {
        return $this->idTipoDeporte;
    }

    /**
     * @param mixed $idTipoDeporte
     *
     * @return self
     */
    public function setIdTipoDeporte($idTipoDeporte)
    {
        $this->idTipoDeporte = $idTipoDeporte;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisNombre()
    {
        return $this->disNombre;
    }

    /**
     * @param mixed $disNombre
     *
     * @return self
     */
    public function setDisNombre($disNombre)
    {
        $this->disNombre = $disNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisNumeroParticipantes()
    {
        return $this->disNumeroParticipantes;
    }

    /**
     * @param mixed $disNumeroParticipantes
     *
     * @return self
     */
    public function setDisNumeroParticipantes($disNumeroParticipantes)
    {
        $this->disNumeroParticipantes = $disNumeroParticipantes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param mixed $fechaCreacion
     *
     * @return self
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * @param mixed $fechaModificacion
     *
     * @return self
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }

    /**
     * @param mixed $usuarioCreacion
     *
     * @return self
     */
    public function setUsuarioCreacion($usuarioCreacion)
    {
        $this->usuarioCreacion = $usuarioCreacion;

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
}
 ?>