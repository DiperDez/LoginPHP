<?php session_start();
    require './php/conexion.php';

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }

    $statement = $conexion->prepare('SELECT * FROM usuarios'); 
    $statement-> execute();
    $usuarios = $statement->fetchAll();

    if(isset($_POST['editar'])){
        $id = $_POST['editar'];
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $conexion->query("CALL spEditarUsuario('$id', '$nombre', '$apellidoMaterno', '$apellidoPaterno', '$email', '$telefono', '$usuario','$password')"); 
        header('Location: tabla.php');

    }

    if(isset($_POST['registrar'])){ 

        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conexion->query("CALL spCrearUsuario('$nombre', '$apellidoMaterno', '$apellidoPaterno', '$email', '$telefono', '$usuario','$password')"); 
        header('Location: tabla.php');

    }

    if($_GET['eliminar']){ 

        $id = $_GET['eliminar'];
        $conexion->query("CALL spEliminarUsuario('$id')"); 

        header('Location: tabla.php');

    }

    require('./views/tabla.view.php');
?>