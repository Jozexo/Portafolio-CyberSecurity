<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portafolio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nombre, apellido, usuario, nota, fechanota FROM comentarios ORDER BY fechanota DESC";
$result = $conn->query($sql);