<?php
$host = 'localhost';
$db = 'crud_usuarios';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}
?>