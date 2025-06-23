<?php 

    $servidor ="localhost";
    $usuario = "root";
    $password = "sqldeveloper";
    $db = "todolistdb";

    $conexion = new mysqli($servidor,$usuario,$password,$db);

    if($conexion->connect_error)
    {
        die("Conexion fallida " . $conexion->connect_error);
    }

    //echo "Conexion exitosa";
    // $sql = "CREATE DATABASE todolistDB";
    // if($conexion->query($sql)=== true)
    // {
    //     echo "Base de datos correctamente creada";
    // }else {
    //     die("Error al crear la base de datos: ". $conexion->error);
    // }

    $sql = "CREATE TABLE todoTable(
        id int auto_increment primary key,
        texto varchar(100) NOT NULL,
        completado boolean NOT NULL,
        timestamp TIMESTAMP)";

        if($conexion->query($sql)===true)
        {
            echo "La tabla se creo correctamente";
        }else {
            die("Error al crear la tabla: " . $conexion->error);
        }

?>