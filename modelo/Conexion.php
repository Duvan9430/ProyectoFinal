<?php 
/**
  * 
  */
 class Conexion extends PDO{

    private static $instancia = null;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "bdproyecto";
    

    public function __construct(){
        try {
            parent::__construct ("mysql:host={$this->host};dbname={$this->db};charset=utf8",
            $this->user, $this->pass);
            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public static function Singleton()
    {
       if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia; 
    }
} 
?>