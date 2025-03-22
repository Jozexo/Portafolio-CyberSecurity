<?php
include 'config.php';

$sql = "SELECT * FROM comments ORDER BY fechanota DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comentario'>";
        echo "<p><strong>" . $row["nombreyapellido"] . "</strong> (" . $row["usuario"] . ") - " . $row["fechanota"] . "</p>";
        echo "<p>" . $row["nota"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay comentarios aún.";
}

$conn->close();
?>