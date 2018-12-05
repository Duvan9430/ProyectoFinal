<?php  

/**
 * 
 */
class TorneoE
{
	private $idTorneo;
	private $idClasificacionTorneo;
	private $idDisciplina;
	private $idLugar;
	private $idGeneroTorneo;
	private $idEncargado;
    private $torNumeroEquipos;
	private $idTipoEliminatoria;
	private $torNombre;
	private $torFechaInicio;
	private $torFechaFin;
	private $fechaCreacion;
	private $fechaModificacion;
	private $usuarioCreacion;
	private $usuarioModificacion;


    /**
     * @return mixed
     */
    public function getIdTorneo()
    {
        return $this->idTorneo;
    }

    /**
     * @param mixed $idTorneo
     *
     * @return self
     */
    public function setIdTorneo($idTorneo)
    {
        $this->idTorneo = $idTorneo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdClasificacionTorneo()
    {
        return $this->idClasificacionTorneo;
    }

    /**
     * @param mixed $idClasificacionTorneo
     *
     * @return self
     */
    public function setIdClasificacionTorneo($idClasificacionTorneo)
    {
        $this->idClasificacionTorneo = $idClasificacionTorneo;

        return $this;
    }

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
    public function getIdLugar()
    {
        return $this->idLugar;
    }

    /**
     * @param mixed $idLugar
     *
     * @return self
     */
    public function setIdLugar($idLugar)
    {
        $this->idLugar = $idLugar;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdGeneroTorneo()
    {
        return $this->idGeneroTorneo;
    }

    /**
     * @param mixed $idGeneroTorneo
     *
     * @return self
     */
    public function setIdGeneroTorneo($idGeneroTorneo)
    {
        $this->idGeneroTorneo = $idGeneroTorneo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEncargado()
    {
        return $this->idEncargado;
    }

    /**
     * @param mixed $idEncargado
     *
     * @return self
     */
    public function setIdEncargado($idEncargado)
    {
        $this->idEncargado = $idEncargado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTorNumeroEquipos()
    {
        return $this->torNumeroEquipos;
    }

    /**
     * @param mixed $torNumeroEquipos
     *
     * @return self
     */
    public function setTorNumeroEquipos($torNumeroEquipos)
    {
        $this->torNumeroEquipos = $torNumeroEquipos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdTipoEliminatoria()
    {
        return $this->idTipoEliminatoria;
    }

    /**
     * @param mixed $idTipoEliminatoria
     *
     * @return self
     */
    public function setIdTipoEliminatoria($idTipoEliminatoria)
    {
        $this->idTipoEliminatoria = $idTipoEliminatoria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTorNombre()
    {
        return $this->torNombre;
    }

    /**
     * @param mixed $torNombre
     *
     * @return self
     */
    public function setTorNombre($torNombre)
    {
        $this->torNombre = $torNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTorFechaInicio()
    {
        return $this->torFechaInicio;
    }

    /**
     * @param mixed $torFechaInicio
     *
     * @return self
     */
    public function setTorFechaInicio($torFechaInicio)
    {
        $this->torFechaInicio = $torFechaInicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTorFechaFin()
    {
        return $this->torFechaFin;
    }

    /**
     * @param mixed $torFechaFin
     *
     * @return self
     */
    public function setTorFechaFin($torFechaFin)
    {
        $this->torFechaFin = $torFechaFin;

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