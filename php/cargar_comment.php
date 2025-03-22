<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybersecurity_comments";
$conn = "";

$conn = mysqli_connect($servername, 
    $username, 
    $password, 
    $dbname
);

$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='comentario'>";
        echo "<p><strong>" . htmlspecialchars($row["nombreyapellido"]) . 
        "</strong> (" . htmlspecialchars($row["usuario"]) . ") - " 
        . $row["fechanota"] . "</p>";
        echo "<p>" . htmlspecialchars($row["nota"]) . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay comentarios aún.";
}

$conn->close();
?>