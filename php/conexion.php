<?php 

    try{
        $conexion = new PDO('mysql:host=localhost; dbname=dbusuarios', 'root', 'masterv1');
    } catch (PDOException $e) {
        echo "Error: " . $e-> getMessage();
    }
    

?>