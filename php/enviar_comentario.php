<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portafolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$nota = $_POST['nota'];
$fechanota = date("Y-m-d H:i:s");

$sql = "INSERT INTO comentarios (nombre, apellido, usuario, email, nota, fechanota)
VALUES ('$nombre', '$apellido', '$usuario', '$email', '$nota', '$fechanota')";

if ($conn->query($sql) === TRUE) {
    echo "Comentario enviado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}