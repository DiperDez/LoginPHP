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
        <div class="col-10 col-md-10 bg-white p-5 rounded-bottom border-top border-dark border-5 shadow-sm">
            <h1 class="fw-light text-center mb-5">Tabla Usuarios</h1>
            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php foreach($usuarios as $usuario): ?>
                      <tr>
                        <th scope="row"><?php echo $usuario['id']?></th>
                        <td name="usuario"><?php echo $usuario['Usuario']?></td>
                        <td name="nombre"><?php echo $usuario['Nombre']?></td>
                        <td name="apellidoMaterno"><?php echo $usuario['ApellidoMaterno']?></td>
                        <td name="apellidoMaterno"><?php echo $usuario['ApellidoPaterno']?></td>
                        <td name="email"><?php echo $usuario['Email']?></td>
                        <td name="telefono"><?php echo $usuario['Telefono']?></td>
                        <td name="password"><?php echo $usuario['Password']?></td>
                        <td>
                          <button 
                            type="button" 
                            class="btn btn-primary btn-sm shadow-none editar" data-bs-toggle="modal" 
                            data-bs-target="#formEditar" 
                            data-bs-whatever="@mdo" 
                            data-id="<?php echo $usuario['id']?>"
                            >
                            Editar
                          </button>
                        </td>
                        <td>
                          <a 
                            type="button" 
                            class="btn btn-danger btn-sm shadow-none eliminar"
                            data-id="<?php echo $usuario['id']?>"
                            href="#"
                            value=""
                            name="eliminar"
                            >
                            Eliminar
                          </a>
                        </td>
                      </tr>
                    <?php endforeach;?>
                  
                </tbody>
              </table>
             <!-- Modal -->
            <div class="modal fade" id="formAgregar" tabindex="-1" aria-labelledby="formRegistrarLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Agregar usuario</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST">
                      <div class="mb-3">
                        <label for="usuario" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" required name="usuario">
                      </div>
                      <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" required name="nombre">
                      </div>
                      <div class="mb-3">
                        <label for="apellidoMaterno" class="col-form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" required name="apellidoMaterno">
                      </div>
                      <div class="mb-3">
                        <label for="apellidoPaterno" class="col-form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control" required name="apellidoPaterno">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="col-form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" required name="email">
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input type="text" class="form-control" required name="telefono" min="10" max="10">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" required name="password">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success" name="registrar">Registrar usuario</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="formEditar" tabindex="-1" aria-labelledby="formEditarLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Editar usuario</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST">
                      <div class="mb-3">
                        <label for="usuario" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario">
                      </div>
                      <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre">
                      </div>
                      <div class="mb-3">
                        <label for="apellidoMaterno" class="col-form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" name="apellidoMaterno">
                      </div>
                      <div class="mb-3">
                        <label for="apellidoPaterno" class="col-form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control" name="apellidoPaterno">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="col-form-label">Correo electrónico:</label>
                        <input type="text" class="form-control" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="col-form-label">Teléfono:</label>
                        <input type="text" class="form-control" name="telefono">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" name="password">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" name="editar" id="editar" value="">Guardar cambios</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3 text-end d-flex justify-content-between">
              <button type="button" class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#formAgregar" data-bs-whatever="@mdo">Agregar usuario</button>
              <a href="cerrar.php" class="text-decoration-none btn btn-secondary btn-sm">Cerrar sesión</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>