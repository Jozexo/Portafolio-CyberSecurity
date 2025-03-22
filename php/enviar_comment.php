<?php
//include 'config.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybersecurity_comments";
$conn = "";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

    $nombreyapellido = $_POST['nombreyapellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $nota = $_POST['nota'];
    $fechanota = date("Y-m-d H:i:s");

    $sql = "INSERT INTO comments (nombreyapellido, usuario, email, nota, fechanota)
            VALUES ('$nombreyapellido', '$usuario', '$email', '$nota', '$fechanota')";

    if ($conn->query($sql) === TRUE) {
        echo "Comentario enviado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
//}
