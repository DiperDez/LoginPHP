<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET,POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    require '../php/conexion.php';

    if(isset($_GET["insertar"])){
        $data = json_decode(file_get_contents("php://input"));

        $nombre     = $data->nombre;
        $apellidoPa = $data->apellidoPa;
        $apellidoMa = $data->apellidoMa;
        
        if(($nombre!="") && ($apellidoPa!="") && ($apellidoMa != "")){
                
            $statement = $conexion-> prepare("INSERT INTO usuarios (Nombre, ApellidoMaterno, ApellidoPaterno) VALUES ('$nombre', '$apellidoMa', '$apellidoPa')");

            $statement-> execute();
            
            echo json_encode(["success"=>1]);
        }

        exit();
    }

    $statement = $conexion->prepare('SELECT * FROM usuarios'); 
    $statement-> execute();
    $usuarios = $statement->fetchAll();

        echo json_encode($usuarios);
    

?>