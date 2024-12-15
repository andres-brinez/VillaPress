<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">VILLApress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/VILLApress/service/home.php">Empleados<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="/VILLApress/service/facturas.php">Facturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/VILLApress/Index.php">Home </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container ">
        <h1 class="mt-4 mb-4 text-center">Empleados</h1>
        <a href="/VILLApress/Vista/empleado/crearEmpleadoView.php" class="btn btn-success mb-3">Crear Empleado</a>
        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $success = isset($_GET['success']) && $_GET['success'] === 'true' ? 'success' : 'danger';
        
            echo "<div class='alert alert-$success text-center' role='alert'>$message</div>";
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td>
                            <?php echo $employee['PKId_Emp']; ?>
                        </td>
                        <td>
                            <?php echo $employee['NoDoc_Emp']; ?>
                        </td>
                        <td>
                            <?php echo $employee['Nombre_Emp']; ?>
                        </td>
                        <td>
                            <?php echo $employee['Apellido_Emp']; ?>
                        </td>
                        <td>
                            <?php echo $employee['Telefono_Emp']; ?>
                        </td>
                        <td>
                            <?php echo $employee['Email_Emp']; ?>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="\VILLApress\service\updateEmpleado.php?id=<?php echo $employee['PKId_Emp']; ?>">Editar</a>
                            <a class="btn btn-danger" href="\VILLApress\service\deleteEmpleado.php?id=<?php echo $employee['PKId_Emp']; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar este empleado?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>