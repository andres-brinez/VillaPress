
<!DOCTYPE html>
<html>
<head>
    <title>Facturas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
                <li class="nav-item ">
                    <a class="nav-link" href="/VILLApress/service/home.php">Empleados<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link"href="\VILLApress\service\facturas.php">Facturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/VILLApress/Index.php">Home </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-4 mb-3 text-center">Facturas</h1>
        <a href="/VILLApress/Vista/empleado/crearEmpleadoView.php" class="btn btn-success mb-3">Crear Facturas</a>
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
                    <th>PKId_Fac</th>
                    <th>Total_Fac</th>
                    <th>Fecha_Fac</th>
                    <th>Estado_Fac</th>
                    <th>FKId_Emp</th>
                    <th>FKId_Cli</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facturas as $factura): ?>
                    <tr>
                        <td><?php echo $factura['PKId_Fac']; ?></td>
                        <td><?php echo $factura['Total_Fac']; ?></td>
                        <td><?php echo $factura['Fecha_Fac']; ?></td>
                        <td><?php echo $factura['Estado_Fac']; ?></td>
                        <td><?php echo $factura['FKId_Emp']; ?></td>
                        <td><?php echo $factura['FKId_Cli']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>