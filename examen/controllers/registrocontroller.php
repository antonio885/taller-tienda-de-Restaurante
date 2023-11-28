<?php
include_once("../model/registromodelo.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contraseña = $_POST["contrasena"];
$rol = $_POST["rol"];

$registroz = new \modeloRegistro\registro;
$registroz->setNombre($nombre);
$registroz->setApellido($apellido);
$registroz->setCorreo($correo);
$registroz->setContraseña($contraseña);
$registroz->setRol($rol);

$response = $registroz->insertregistro();
echo json_encode($response);

unset($registroz);
unset($response);