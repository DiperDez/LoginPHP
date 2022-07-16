<?php session_start(); 
    require './php/conexion.php';
    
    if(isset($_SESSION['usuario'])){
        header('Location: tabla.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario  = $_POST['usuario'];
        $password = $_POST['password'];

        $errores = '';

        if(empty($usuario) or empty($password)){
            $errores .= '<li class="text-white text-center py-2">Ingresa todos los datos</li>';
        }else{

            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Usuario = :usuario AND Password = :password');

            $statement-> execute(array(
                ':usuario'  => $usuario,
                ':password' => $password
            ));

            $resultado = $statement->fetch();

            if($resultado !== false){
                $_SESSION['usuario'] = $usuario;
                header('Location: tabla.php');
            }else{
                $errores .= '<li class="text-white text-center py-2">Datos incorrectos</li>';
            }
        }
    }

    require './views/login.view.php';
?>