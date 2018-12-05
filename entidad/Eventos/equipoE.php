<?php  


/**
 * 
 */
class Equipo
{
    private $idEquipo;
    private $idTorneo;
    private $equNombre;
    private $estado;


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
    public function getEquNombre()
    {
        return $this->equNombre;
    }

    /**
     * @param mixed $equNombre
     *
     * @return self
     */
    public function setEquNombre($equNombre)
    {
        $this->equNombre = $equNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * @param mixed $idEquipo
     *
     * @return self
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }
}