<?php

// Conexión a la base de datos 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contraseña";
$port = 3308;


// Creando la Conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);


// Verificando la Conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);

}


// Generando los Hashs para las contraseñas
$contraseña = "Admin030";
$hash = password_hash($contraseña, PASSWORD_DEFAULT);
echo "Hash de la contraseña Usuario: " . $hash . "<br>";


// Consulta SQL 
$stmt = $conn->prepare("INSERT INTO contraseña (contraseña) VALUES (?, ?)");
$stmt->bind_param("s", $hash);


// Inicializando Consulta
if ($stmt->execute()) {
    echo "Hash almacenado en la base de datos";
} else {
    echo "Error al almacenar hashes: " . $stmt->error;

}

// Cerrando Sesiones
$stmt->close();

$conn->close();

?>