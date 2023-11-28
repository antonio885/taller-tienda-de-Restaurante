<?php 
include_once "../model/pedidoModel.php";

$id = $_GET["id"];
$pedidp = new \modeloPedido\pedido;
$pedidp->setId($id);
$response = $pedidp->idpedido();
echo json_encode($response);

unset($response);
unset($pedidp);

