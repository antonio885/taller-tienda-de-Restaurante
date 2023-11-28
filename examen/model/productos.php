<?php 
namespace modeloProduct;

use PDO;

include_once "../model/conexion.php";
class Product {
    private $id;
    private $tipo;
    private $topping;
    private $precioTopping;
 private $valorTipo;
 private $total;
 private $conexion;

    public function __construct()
    {
        $this->conexion = new \conexion();
    }
 public function subirProduct(){
    try {
        $sql = $this->conexion->getConPDO()->prepare("INSERT INTO pedido(tipo,topping,precioTopping,valorTipo,total) values(?,?,?,?,?)");
        $sql->bindParam(1, $this->tipo);
        $sql->bindParam(2, $this->topping);
        $sql->bindParam(3, $this->precioTopping);
        $sql->bindParam(4, $this->valorTipo);
        $sql->bindParam(5, $this->total);
        $sql->execute(); 
        // $retur = $sql->fetchAll(PDO::FETCH_ASSOC);
       
        
         return "bien";
       } catch (\PDOException $th) {
     return "error" . $th->getMessage();
       }

 }

 /**
  * Get the value of valorTipo
  */ 
 public function getValorTipo()
 {
  return $this->valorTipo;
 }

 /**
  * Set the value of valorTipo
  *
  * @return  self
  */ 
 public function setValorTipo($valorTipo)
 {
  $this->valorTipo = $valorTipo;

  return $this;
 }

    /**
     * Get the value of precioTopping
     */ 
    public function getPrecioTopping()
    {
        return $this->precioTopping;
    }

    /**
     * Set the value of precioTopping
     *
     * @return  self
     */ 
    public function setPrecioTopping($precioTopping)
    {
        $this->precioTopping = $precioTopping;

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
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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

 /**
  * Get the value of total
  */ 
 public function getTotal()
 {
  return $this->total;
 }

 /**
  * Set the value of total
  *
  * @return  self
  */ 
 public function setTotal($total)
 {
  $this->total = $total;

  return $this;
 }
}