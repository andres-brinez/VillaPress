<?php
require_once '../modelo/empleados_model.php';
// require_once 'models/InvoiceModel.php';

class HomeController
{
    private $employeeModel;
    private $invoiceModel;

    public function __construct()
    {
        $this->employeeModel = new Empleados();
        // $this->invoiceModel = new InvoiceModel();
    }

    public function showHome()
    {
        // obtiene los datos
        $employees = $this->employeeModel->getAllEmployees();
        // var_dump($employees);, se  puede ver la lista de empleados
        // retorna la vista
        require_once '../Vista/homeView.php';
    }

    public function getEmployee($id)
    {
        return $this->employeeModel->getEmployeeById($id);
    }

    public function createEmployee($data)
    {

        $result = $this->employeeModel->registrar($data);

        if ($result) {
            header("Location: /VILLApress/service/home.php?message=Empleado creado correctamente&success=true");
        } else {
            header("Location: /VILLApress/service/home.php?message=Fallo al crear el empleado&success=false");
        }

    }

    public function deleteEmployee($id)
    {
        $result = $this->employeeModel->eliminar($id);

        if ($result) {
            header("Location: /VILLApress/service/home.php?message=El empleado con el documento $id fue eliminado correctamente&success=true");
        } else {
            header("Location: /VILLApress/service/home.php?message=Fallo al eliminar el empleado con el documento $id&success=false");
        }
    }

    public function updateEmployee($id, $data)
    {
        $result = $this->employeeModel->actualizar($id, $data);

        if ($result) {
            header("Location: /VILLApress/service/home.php?message=Empleado con el documento $id fue actualizado correctamente &success=true");
        } else {
            header("Location: /VILLApress/service/home.php?message=Failed to update employee&success=false");
        }
    }



    // public function createInvoice($data) {
    //     $this->invoiceModel->create($data);
    //     header('Location: homeView.php');
    // }
}
?>