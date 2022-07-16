<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/Login/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/Login/css/styles.css">
</head>
<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 bg-white p-5 rounded-bottom border-top border-dark border-5 shadow-sm">
            <h1 class="text-dark text-center mb-3 fw-light">Iniciar Sesión</h1>
            <div class="mb-3">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control">    
            </div>
            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control">    
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <input type="submit" value="Iniciar sesión" class="btn btn-sm btn-primary">
            </div>

            <?php if(!empty($errores)): ?>
                <div class="bg-danger">
                    <ul class="m-0 p-0">
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>