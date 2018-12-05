<?php 
	
	class RegistroGimnasioE
	{
		private $idAprendiz;
		private $perNit;
	
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
    public function getPerNit()
    {
        return $this->perNit;
    }

    /**
     * @param mixed $perNit
     *
     * @return self
     */
    public function setPerNit($perNit)
    {
        $this->perNit = $perNit;

        return $this;
    }
}

 ?>