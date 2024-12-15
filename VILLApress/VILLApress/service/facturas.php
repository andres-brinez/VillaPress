<?php
require '../controlador/FacturaController.php';

$controller = new FacturaController();
$facturas = $controller->showFacturas();
?>