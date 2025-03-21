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

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comentario'>";
        echo "<p><strong>" . $row["nombre"] . " " . $row["apellido"] . "</strong> (" . $row["usuario"] . ") - " . $row["fechanota"] . "</p>";
        echo "<p>" . $row["nota"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay comentarios aún.";
}

$conn->close();
?>