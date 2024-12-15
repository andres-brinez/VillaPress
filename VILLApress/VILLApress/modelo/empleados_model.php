<?php

include("../BD/conexion.php");
class Empleados
{
	public $PKId_Emp, $TipoDoc_Emp, $NoDoc_Emp, $Nombre_Emp, $Apellido_Emp, $Usuario_Emp, $Contrasena_Emp, $Telefono_Emp, $Email_Emp, $datos;
	public function __construct($id = null, $doc = null, $tipodoc = null, $nom = null, $ape = null, $user = null, $cont = null, $num = null, $em = null)
	{
		$this->PKId_Emp = $id;
		$this->TipoDoc_Emp = $tipodoc;
		$this->NoDoc_Emp = $doc;
		$this->Nombre_Emp = $nom;
		$this->Apellido_Emp = $ape;
		$this->Usuario_Emp = $user;
		$this->Contrasena_Emp = $cont;
		$this->Telefono_Emp = $num;
		$this->Email_Emp = $em;
		$this->db = new conexion();

	} //fin contructor

	public function getEmployeeById($id)
{
    $conn = $this->db->cone();
    
    $stmt = $conn->prepare("SELECT * FROM empleado WHERE PKId_Emp = ?");
    
    $stmt->bind_param("i", $id);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
  
	}
}
	public function getAllEmployees()
	{
		$conn = $this->db->cone();
		$stmt = $conn->prepare("SELECT * FROM empleado");
		$stmt->execute();

		// Obtén un objeto mysqli_result
		$result = $stmt->get_result();

		// Llama a fetch_all() en el objeto mysqli_result
		$employees = $result->fetch_all(MYSQLI_ASSOC);

		return $employees;
	}


	public function registrar($data)
	{
		$conn = $this->db->cone();

		$stmt = $conn->prepare("INSERT INTO empleado (TipoDoc_Emp, NoDoc_Emp, Nombre_Emp, Apellido_Emp, Telefono_Emp, Email_Emp, Contrasena_Emp) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $data['TipoDoc_Emp'], $data['NoDoc_Emp'], $data['Nombre_Emp'], $data['Apellido_Emp'], $data['Telefono_Emp'], $data['Email_Emp'], $data['Contrasena_Emp']);
		$stmt->execute();

		if ($stmt->affected_rows > 0) {
			return true;
		} else {
			return false;
		}
	}


	public function eliminar($id)
	{
		$conn = $this->db->cone();

		$stmt = $conn->prepare("DELETE FROM empleado WHERE PKId_Emp  = ?");

		$stmt->bind_param("s", $id);

		$stmt->execute();

		if ($stmt->affected_rows > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function actualizar($id, $data)
	{
		$conn = $this->db->cone();

		$stmt = $conn->prepare("UPDATE empleado SET Nombre_Emp = ?, Apellido_Emp = ?, Telefono_Emp = ?, Email_Emp = ? WHERE PKId_Emp = ?");

		$stmt->bind_param("ssssi", $data['Nombre_Emp'], $data['Apellido_Emp'], $data['Telefono_Emp'], $data['Email_Emp'], $id);

		$stmt->execute();

		if ($stmt->affected_rows > 0) {
			return true;
		} else {
			return false;
		}
	}


}
