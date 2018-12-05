<?php

/**
* }
*/
class EntEps
{
    private $idEps;
    private $epsCodigo;
    private $epsNombre;
    private $estado;
    private $fechaCreacion;
    private $fechaModificacion;
    private $usuarioCreacion;
    private$usuarioModificacion ;


    public function getIdEps()
    {
        return $this->idEps;
    }

  
    public function setIdEps($idEps)
    {
        $this->idEps = $idEps;

        return $this;
    }

   
    public function getEpsCodigo()
    {
        return $this->epsCodigo;
    }

    public function setEpsCodigo($epsCodigo)
    {
        $this->epsCodigo = $epsCodigo;

        return $this;
    }

   
    public function getEpsNombre()
    {
        return $this->epsNombre;
    }

    public function setEpsNombre($epsNombre)
    {
        $this->epsNombre = $epsNombre;

        return $this;
    }

   
    public function getEstado()
    {
        return $this->estado;
    }

  
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

   
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

   
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    
    public function getUsuarioCreacion()
    {
        return $this->usuarioCreacion;
    }

   
    public function setUsuarioCreacion($usuarioCreacion)
    {
        $this->usuarioCreacion = $usuarioCreacion;

        return $this;
    }

  
    public function getUsuarioModificacion()
    {
        return $this->usuarioModificacion   ;
    }

   
    public function setUsuarioModificacion  ($usuarioModificacion   )
    {
        $this->usuarioModificacion   = $usuarioModificacion ;

        return $this;
    }
}
?>