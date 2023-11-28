<?php
include_once "../model/productos.php";


$tipo = $_POST["producto"];
$topping = $_POST["topping"];
$precioProducto = $_POST["precioProducto"];
$precio = $_POST["precio"];
$total = $_POST["total"];


$registroz = new \modeloProduct\Product;
$registroz->setTipo($tipo);
$registroz->setTopping($topping);
$registroz->setValorTipo($precioProducto);

$registroz->setPrecioTopping($precio);
$registroz->setTotal($total);

$response = $registroz->subirProduct();
echo json_encode($response);

unset($registroz);
unset($response);