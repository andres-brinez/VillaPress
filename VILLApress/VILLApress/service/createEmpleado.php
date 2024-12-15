<?php
require '../controlador/HomeController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller = new HomeController();
    $data = [
        'TipoDoc_Emp' => $_POST['TipoDoc_Emp'],
        'NoDoc_Emp' => $_POST['NoDoc_Emp'],
        'Nombre_Emp' => $_POST['Nombre_Emp'],
        'Apellido_Emp' => $_POST['Apellido_Emp'],
        'Telefono_Emp' => $_POST['Telefono_Emp'],
        'Email_Emp' => $_POST['Email_Emp'],
        'Contrasena_Emp' => $_POST['Contrasena_Emp']
    ];
    
    $controller->createEmployee($data);
   
}
;
require '../Vista/empleado/crearEmpleadoView.php';

?>