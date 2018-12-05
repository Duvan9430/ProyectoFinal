<?php
/**
 *
 */
class EjercicioMusculoE
{
  private $idEjercicio;
  private $idMusculo;
  private $ejmDescripcion;
  private $ejmFoto;
  private $idEjercicioMusculo;




    /**
     * @return mixed
     */
    public function getIdEjercicio()
    {
        return $this->idEjercicio;
    }

    /**
     * @param mixed $idEjercicio
     *
     * @return self
     */
    public function setIdEjercicio($idEjercicio)
    {
        $this->idEjercicio = $idEjercicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMusculo()
    {
        return $this->idMusculo;
    }

    /**
     * @param mixed $idMusculo
     *
     * @return self
     */
    public function setIdMusculo($idMusculo)
    {
        $this->idMusculo = $idMusculo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEjmDescripcion()
    {
        return $this->ejmDescripcion;
    }

    /**
     * @param mixed $ejmDescripcion
     *
     * @return self
     */
    public function setEjmDescripcion($ejmDescripcion)
    {
        $this->ejmDescripcion = $ejmDescripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEjmFoto()
    {
        return $this->ejmFoto;
    }

    /**
     * @param mixed $ejmFoto
     *
     * @return self
     */
    public function setEjmFoto($ejmFoto)
    {
        $this->ejmFoto = $ejmFoto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEjercicioMusculo()
    {
        return $this->idEjercicioMusculo;
    }

    /**
     * @param mixed $idEjercicioMusculo
     *
     * @return self
     */
    public function setIdEjercicioMusculo($idEjercicioMusculo)
    {
        $this->idEjercicioMusculo = $idEjercicioMusculo;

        return $this;
    }
}

?>
