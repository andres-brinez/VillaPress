<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VILLapress</title>
    <!--icono-->
    <link rel="icon" href="img/logo1.png" type="png/x-icon">
    <!-- Llamar a Bootstrap estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Llamar estilos propios -->
    <link rel="stylesheet" href="styles\styles.css">
    <!--iconos-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <body style="background-color: <?php echo $isLoginPage ? 'white' : 'url(../Imagenes/background.jpg)'; ?>">
        <div>
            <?php
                include('Enru.php');
            ?>
        </div>
    </body>
    <!-- Llamar Bootstrap JS y Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>