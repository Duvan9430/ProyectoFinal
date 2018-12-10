<?php
/**
*
*/
class RutinaVista
{
	private $idRutina;
	private $idEjercicio;
	private $idClasificacion;

    /**
     * @return mixed
     */
    public function getIdRutina()
    {
        return $this->idRutina;
    }

    /**
     * @param mixed $idRutina
     *
     * @return self
     */
    public function setIdRutina($idRutina)
    {
        $this->idRutina = $idRutina;

        return $this;
    }

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
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * @param mixed $idClasificacion
     *
     * @return self
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }
}
?>
