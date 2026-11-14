<?php
$host = 'db'; // Nombre del servicio de MySQL definido en Docker Compose
$dbname = 'test_db';
$username = 'root';
$password = 'secret';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    echo "<h1>¡Hola Mundo desde la Web App con Docker Compose!</h1>";
    echo "<p style='color: green; font-weight: bold;'>✅ ¡Conexión exitosa a la base de datos MySQL!</p>";
} catch (PDOException $e) {
    echo "<h1>¡Hola Mundo!</h1>";
    echo "<p style='color: red; font-weight: bold;'>❌ Error conectando a la base de datos: " . $e->getMessage() . "</p>";
}
?>