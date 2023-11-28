<?php
namespace modeloRegistro;

include_once("../model/conexion.php");

class registro{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $contraseña;
    private $rol;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new \conexion();
    }
    public function insertregistro(){
  try {
    $pdo =   $this->conexion->getConPDO()->prepare("INSERT INTO usuarios (nombre,apellido,correo,contraseña,rol) values (?,?,?,?,?)");
    $pdo->bindParam(1, $this->nombre);
    $pdo->bindParam(2, $this->apellido);
    $pdo->bindParam(3, $this->correo);
    $pdo->bindParam(4, $this->contraseña);
    $pdo->bindParam(5, $this->rol);

    $pdo->execute();
return "funciona";
  } catch (\PDOException $th) {
   return "error". $th->getMessage();
  }

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
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
}