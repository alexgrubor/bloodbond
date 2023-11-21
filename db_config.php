<?php
$servername = "localhost";
$port = 3307;
$username = "root";
$password = "essen";
$dbname = "bloodbond";


$dsn = "mysql:host=$servername;dbname=$dbname;port=$port";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
