<?php

class conexion {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $bd = "examen";
    private $conPDO;

    public function __construct()
    {
        try {
            $this->conPDO = new PDO("mysql:dbname=$this->bd;host=$this->host",$this->user,$this->password);
        } catch (\PDOException $th) {
          echo "Error" . $th->getMessage();
        }
    }


    /**
     * Get the value of conPDO
     */ 
    public function getConPDO()
    {
        return $this->conPDO;
    }
}