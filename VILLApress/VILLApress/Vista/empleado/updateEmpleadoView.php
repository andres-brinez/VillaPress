<!DOCTYPE html>
<html>

<head>
    <title>Actualizar Empleado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-4 mb-3 text-center">Actualizar Empleado</h1>
        <form action="updateEmpleado.php?id=<?php echo $employee['PKId_Emp']; ?>" method="post">
            <div class="form-group">
                <label for="TipoDoc_Emp">Tipo de Documento:</label>
                <input type="text" id="TipoDoc_Emp" name="TipoDoc_Emp" class="form-control"
                    value="<?php echo $employee['TipoDoc_Emp']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="NoDoc_Emp">Número de Documento:</label>
                <input type="number" id="NoDoc_Emp" name="NoDoc_Emp" class="form-control"
                    value="<?php echo $employee['NoDoc_Emp']; ?>" readonly  maxlength="5" pattern="\d{5}">
            </div>
            <div class="form-group">
                <label for="Nombre_Emp">Nombre:</label>
                <input type="text" id="Nombre_Emp" name="Nombre_Emp" class="form-control"
                    value="<?php echo $employee['Nombre_Emp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Apellido_Emp">Apellido:</label>
                <input type="text" id="Apellido_Emp" name="Apellido_Emp" class="form-control"
                    value="<?php echo $employee['Apellido_Emp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Telefono_Emp">Telefono:</label>
                <input type="number" id="Telefono_Emp" name="Telefono_Emp" class="form-control"
                    value="<?php echo $employee['Telefono_Emp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Email_Emp">Email:</label>
                <input type="email" id="Email_Emp" name="Email_Emp" class="form-control"
                    value="<?php echo $employee['Email_Emp']; ?>" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
        <div class="text-center mb-4" >
            <a href="javascript:history.back()" class="btn btn-secondary">Volver atrás</a>
        </div>
    </div>
</body>

</html>