<?php 
include_once("../model/pedidoModel.php");

$pedidoRead = new \modeloPedido\pedido;
$response = $pedidoRead->readpedido();
echo json_encode($response);
unset($response);
unset($pedidoRead);

