<?php
$servername = "127.0.0.1:3308";
$username = "root"; // Corrected syntax
$password = ""; // contraseña, si es que tienes una configurada
$dbname = "tiendafruver"; // nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida:" . $conn->connect_error);
}

?>
