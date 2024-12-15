<?php
require '../controlador/HomeController.php';

$controller = new HomeController();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        'Nombre_Emp' => $_POST['Nombre_Emp'],
        'Apellido_Emp' => $_POST['Apellido_Emp'],
        'Telefono_Emp' => $_POST['Telefono_Emp'],
        'Email_Emp' => $_POST['Email_Emp'],
    ];
    
    $controller->updateEmployee($_GET['id'], $data);
}
else {
    $employee = $controller->getEmployee($_GET['id']);
}

require '../Vista/empleado/updateEmpleadoView.php';


?>