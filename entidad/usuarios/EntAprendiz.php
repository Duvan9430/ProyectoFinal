<?php


class EntAprendiz
{
    private $idAprendiz;
    private $idPersona;
    private $idFicha;
    private $aprDiscapacidad;

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
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param mixed $idPersona
     *
     * @return self
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

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
    public function getAprDiscapacidad()
    {
        return $this->aprDiscapacidad;
    }

    /**
     * @param mixed $aprDiscapacidad
     *
     * @return self
     */
    public function setAprDiscapacidad($aprDiscapacidad)
    {
        $this->aprDiscapacidad = $aprDiscapacidad;

        return $this;
    }
}
?>