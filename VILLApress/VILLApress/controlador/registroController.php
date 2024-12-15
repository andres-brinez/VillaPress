<?php
class registroController
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function registrar($tipoDoc, $noDoc, $nombre)
    {
        // Iniciar la sesión
        session_start();

        try {
            // Preparar la consulta SQL
            $stmt = $this->db->prepare("INSERT INTO empleado (TipoDoc_Emp, NoDoc_Emp, Nombre_Emp) VALUES (:tipoDoc, :noDoc, :nombre)");

            // Vincular los parámetros
            $stmt->bindParam(':tipoDoc', $tipoDoc);
            $stmt->bindParam(':noDoc', $noDoc);
            $stmt->bindParam(':nombre', $nombre);

            // Ejecutar la consulta
            $stmt->execute();

            // Guardar el mensaje en una variable de sesión
            $_SESSION['mensaje'] = 'Usuario creado correctamente';

            // Redirigir al usuario a la página de inicio
            header('Location: home.php');
        } catch (PDOException $e) {
            echo "Error insertando el registro: " . $e->getMessage();
        }
    }
}