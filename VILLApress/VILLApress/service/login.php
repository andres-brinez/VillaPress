<?php
require '../controlador/LoginController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new LoginController();
    $message = $controller->login($_POST['username'], $_POST['password']);
}

require '../vista/login/loginView.php';
?>