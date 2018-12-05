<?php 
/**
 * Clase donde se encuentran los get y set para el manejo de la clase musculo
 */
class MusculoE
{
    private $idMusculo;
	private $clasificacionMusculo;
	private $usuNombre;



    /**
     * @return mixed
     */
    public function getClasificacionMusculo()
    {
        return $this->clasificacionMusculo;
    }

    /**
     * @param mixed $clasificacionMusculo
     *
     * @return self
     */
    public function setClasificacionMusculo($clasificacionMusculo)
    {
        $this->clasificacionMusculo = $clasificacionMusculo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuNombre()
    {
        return $this->usuNombre;
    }

    /**
     * @param mixed $usuNombre
     *
     * @return self
     */
    public function setUsuNombre($usuNombre)
    {
        $this->usuNombre = $usuNombre;

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
}

















 ?>