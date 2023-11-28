<?php 
namespace modeloPedido;

use PDO;

include_once("../model/conexion.php");

class pedido{
    private $id;
    private $topping;
    private $precio;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new \conexion();
    }

    public function readpedido(){
   try {
    $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM ingredientes");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $result;
   } catch (\PDOException $th) {
 return "error" . $th->getMessage();
   }
    }

    public function idpedido(){
        try {
      $sql = $this->conexion->getConPDO()->prepare("SELECT * FROM ingredientes where id=?");
      $sql->bindParam(1, $this->id);
      $sql->execute();
      $retur = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $retur;
        } catch (\PDOException $th) {
        return "error" . $th->getMessage();
        }
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of topping
     */ 
    public function getTopping()
    {
        return $this->topping;
    }

    /**
     * Set the value of topping
     *
     * @return  self
     */ 
    public function setTopping($topping)
    {
        $this->topping = $topping;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
