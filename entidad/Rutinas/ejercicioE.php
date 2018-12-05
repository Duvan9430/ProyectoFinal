<?php
/**
 *
 */
class EjercicioE
{
	private $tipoEjercicio;
	private $ejeNombre;
	private $ejeDetalle;
	private $ejeImagen;
    private $idEjercicio;
    private $idMusculo;
	private $ejmFoto;
	private $ejmDescripcion;


    /**
     * @return mixed
     */
    public function getTipoEjercicio()
    {
        return $this->tipoEjercicio;
    }

    /**
     * @param mixed $tipoEjercicio
     *
     * @return self
     */
    public function setTipoEjercicio($tipoEjercicio)
    {
        $this->tipoEjercicio = $tipoEjercicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEjeNombre()
    {
        return $this->ejeNombre;
    }

    /**
     * @param mixed $ejeNombre
     *
     * @return self
     */
    public function setEjeNombre($ejeNombre)
    {
        $this->ejeNombre = $ejeNombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEjeDetalle()
    {
        return $this->ejeDetalle;
    }

    /**
     * @param mixed $ejeDetalle
     *
     * @return self
     */
    public function setEjeDetalle($ejeDetalle)
    {
        $this->ejeDetalle = $ejeDetalle;

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
    public function getEjeImagen()
    {
        return $this->ejeImagen;
    }

    /**
     * @param mixed $ejeImagen
     *
     * @return self
     */
    public function setEjeImagen($ejeImagen)
    {
        $this->ejeImagen = $ejeImagen;

        return $this;
    }
}
 ?>
