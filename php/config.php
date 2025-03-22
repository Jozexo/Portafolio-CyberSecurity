<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybersecurity_comments";
$conn = "";

$conn = new mysqli(
    $servername, 
    $username, 
    $password, 
    $dbname
);


if ($conn) {
    echo "Connected to database";
} else {
    echo "Connection failed";
}

?>