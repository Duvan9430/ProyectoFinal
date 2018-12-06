<?php


class EntBienestar
{
    private $idBienestar;
    private $idPersona;
    private $idArea;

    /**
     * @return mixed
     */
    public function getIdBienestar()
    {
        return $this->idBienestar;
    }

    /**
     * @param mixed $idBienestar
     *
     * @return self
     */
    public function setIdBienestar($idBienestar)
    {
        $this->idBienestar = $idBienestar;

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
}
?>