<?php
require '../BD/conexion.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new conexion();
    }

    public function getUser($username) {
        $conn = $this->db->cone();
        $stmt = $conn->prepare("SELECT * FROM empleado WHERE NoDoc_Emp = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>