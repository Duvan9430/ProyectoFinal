<?php 

/**
 * 
 */
class ParticipanteE
{
	
	private $idEquipo;
	private $idAprendiz;
    private $perPrimerNombre;
	private $estado;

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

    /**
     * @return mixed
     */
    public function getIdAprendiz()
    {
        return $this->idAprendiz;
    }

    /**
     * @param mixed $idAprendiz
     *
     * @return self
     */
    public function setIdAprendiz($idAprendiz)
    {
        $this->idAprendiz = $idAprendiz;

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
    public function getPerPrimerNombre()
    {
        return $this->perPrimerNombre;
    }

    /**
     * @param mixed $perPrimerNombre
     *
     * @return self
     */
    public function setPerPrimerNombre($perPrimerNombre)
    {
        $this->perPrimerNombre = $perPrimerNombre;

        return $this;
    }
}


 ?>