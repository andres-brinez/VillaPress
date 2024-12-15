<?php
require '../controlador/HomeController.php';

$controller = new HomeController();
$controller->deleteEmployee($_GET['id']);
?>