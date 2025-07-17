<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: index.php");
?>