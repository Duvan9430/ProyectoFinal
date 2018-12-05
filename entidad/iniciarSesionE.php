<?php 
/**
 * 
 */
class iniciarSesionE
{
	private $idRol;
	private $usuUsuario;
	private $usuPassword;


    /**
     * @return mixed
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * @param mixed $idRol
     *
     * @return self
     */
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuUsuario()
    {
        return $this->usuUsuario;
    }

    /**
     * @param mixed $usuUsuario
     *
     * @return self
     */
    public function setUsuUsuario($usuUsuario)
    {
        $this->usuUsuario = $usuUsuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuPassword()
    {
        return $this->usuPassword;
    }

    /**
     * @param mixed $usuPassword
     *
     * @return self
     */
    public function setUsuPassword($usuPassword)
    {
        $this->usuPassword = $usuPassword;

        return $this;
    }
}
 ?>