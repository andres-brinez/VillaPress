<?php

include("../BD/conexion.php");

class Factura
{
    public $PKId_Fac, $Total_Fac, $Fecha_Fac, $Estado_Fac, $FKId_Emp, $FKId_Cli, $datos;
    public function __construct($id = null, $total = null, $fecha = null, $estado = null, $id_emp = null, $id_cli = null)
    {
        $this->PKId_Fac = $id;
        $this->Total_Fac = $total;
        $this->Fecha_Fac = $fecha;
        $this->Estado_Fac = $estado;
        $this->FKId_Emp = $id_emp;
        $this->FKId_Cli = $id_cli;
        $this->db = new conexion();
    }
    public function getFacturaById($id)
    {
        $conn = $this->db->cone();

        $stmt = $conn->prepare("SELECT * FROM factura WHERE PKId_Fac = ?");

        $stmt->bind_param("i", $id);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    public function getAllFacturas()
    {
        $conn = $this->db->cone();
        $stmt = $conn->prepare("SELECT * FROM factura");
        $stmt->execute();

        $result = $stmt->get_result();

        $facturas = $result->fetch_all(MYSQLI_ASSOC);

        return $facturas;
    }
    public function create($data)
    {
        $conn = $this->db->cone();

        $stmt = $conn->prepare("INSERT INTO factura (Total_Fac, Fecha_Fac, Estado_Fac, FKId_Emp, FKId_Cli) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $data['Total_Fac'], $data['Fecha_Fac'], $data['Estado_Fac'], $data['FKId_Emp'], $data['FKId_Cli']);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

}