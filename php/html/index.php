<?php
echo "Hello, Docker! PHP is working.<br>";

// Testar conexão com o MySQL
$host = 'mysql';
$dbname = 'devweb';
$user = 'root';
$password = 'password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo "Connected to MySQL successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>