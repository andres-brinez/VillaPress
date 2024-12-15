<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Crear Empleado</h1>

    
    <form action="/VILLApress/service/createEmpleado.php" method="post">
        <div class="form-group">
            <label for="TipoDoc_Emp">Tipo de Documento:</label>
            <select id="TipoDoc_Emp" name="TipoDoc_Emp" class="form-control" required>
                <option value="cedula de ciudadania">Cédula de Ciudadanía</option>
                <option value="cedula de extranjeria">Cédula de Extranjería</option>
            </select>
        </div>
        <div class="form-group">
            <label for="NoDoc_Emp">Número de Documento:</label>
            <input type="text" id="NoDoc_Emp" name="NoDoc_Emp" class="form-control" required maxlength="5" pattern="\d{5}">
        </div>
        <div class="form-group">
            <label for="Nombre_Emp">Nombre:</label>
            <input type="text" id="Nombre_Emp" name="Nombre_Emp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Apellido_Emp">Apellido:</label>
            <input type="text" id="Apellido_Emp" name="Apellido_Emp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Telefono_Emp">Teléfono:</label>
            <input type="text" id="Telefono_Emp" name="Telefono_Emp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Email_Emp">Email:</label>
            <input type="email" id="Email_Emp" name="Email_Emp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Contrasena_Emp">Contraseña:</label>
            <input type="password" id="Contrasena_Emp" name="Contrasena_Emp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Empleado</button>
    </form>
</div>
<!-- Incluir Bootstrap JS y Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>