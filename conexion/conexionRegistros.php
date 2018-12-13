<?php

function conectar() {
    $usuario = "root";
    $password = "javiershaka";
    $basededatos = "detodounmemedb";
    $hostname = "localhost";
    $mysqli = new mysqli($hostname, $usuario, $password, $basededatos) or die("Error en la conexion" . mysql_error());
    if (mysqli_connect_errno()) {
        echo "Error de conexión a la BD: " . mysqli_connect_error();
        exit();
    } return $mysqli;
}

function Registrar($nombre, $edad, $sexo, $correo, $contrasena) {
    $conn = conectar();
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "INSERT INTO `detodounmemedb`.`usuario` (`nombre`, `edad`, `sexo`, `correo`, `contrasena`) VALUES ('" . $nombre . "', '" . $edad . "', '" . $sexo . "', '" . $correo . "', '" . $contrasena . "')";
    mysqli_query($conn, $sql);
     
    mysqli_close($conn);
}



?>