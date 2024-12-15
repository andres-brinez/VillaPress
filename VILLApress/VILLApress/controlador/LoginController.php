<?php
require '../modelo/usuario_model.php';

class LoginController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function login($username, $password) {
        if (empty($username) || empty($password)) {
            return "Por favor, rellene todos los campos.";
        }
    
        $user = $this->model->getUser($username);

    
        if ($user && $user['NoDoc_Emp'] == $username && $user['Contrasena_Emp'] == $password) {
            session_start();
            $_SESSION['username'] = $user['username'];
            // se llama al servicio home.php que tiene una instacia del controlador y devuelve la vista
            header("Location: /VILLApress/service/home.php");
            exit();
        } else {
            return "El usuario o la contraseña son incorrectos.";
        }
    }
}
?>