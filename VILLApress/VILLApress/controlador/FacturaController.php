<?php
require_once '../modelo/factura_model.php';

class FacturaController {
    private $model;

    public function __construct() {
        $this->model = new Factura();
    }

    public function showFacturas() {
        $facturas = $this->model->getAllFacturas();
        require_once '../Vista/factura/facturasView.php';
    }

    public function getFactura($id) {
        return $this->model->getById($id);
    }

    public function createFactura($data) {
        $result = $this->model->create($data);

        if ($result) {
            header("Location: /VILLApress/service/facturas.php?message=Factura creada correctamente&success=true");
        } else {
            header("Location: /VILLApress/service/facturas.php?message=Fallo al crear la factura&success=false");
        }
    }

    public function deleteFactura($id) {
        $result = $this->model->delete($id);

        if ($result) {
            header("Location: /VILLApress/service/facturas.php?message=La factura con el ID $id fue eliminada correctamente&success=true");
        } else {
            header("Location: /VILLApress/service/facturas.php?message=Fallo al eliminar la factura con el ID $id&success=false");
        }
    }

    public function updateFactura($id, $data) {
        $result = $this->model->update($id, $data);

        if ($result) {
            header("Location: /VILLApress/service/facturas.php?message=Factura con el ID $id fue actualizada correctamente &success=true");
        } else {
            header("Location: /VILLApress/service/facturas.php?message=Fallo al actualizar la factura&success=false");
        }
    }
}