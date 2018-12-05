<?php
/**
 *
 */
class ClasificacionRutinaE
{
	private $clrNombre;
	private $clrDescripcion;



    /**
     * @return mixed
     */
    public function getClrDescripcion()
    {
        return $this->clrDescripcion;
    }

    /**
     * @param mixed $clrDescripcion
     *
     * @return self
     */
    public function setClrDescripcion($clrDescripcion)
    {
        $this->clrDescripcion = $clrDescripcion;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getClrNombre()
    {
        return $this->clrNombre;
    }

    /**
     * @param mixed $clrNombre
     *
     * @return self
     */
    public function setClrNombre($clrNombre)
    {
        $this->clrNombre = $clrNombre;

        return $this;
    }
}
 ?>
