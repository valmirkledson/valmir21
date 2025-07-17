<?php
include 'conexao.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM usuario WHERE id = ?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Editar Usuário</h2>
  <form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    <div class="mb-3">
      <label>Nome:</label>
      <input type="text" name="nome" class="form-control" value="<?= $usuario['nome'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Email:</label>
      <input type="email" name="email" class="form-control" value="<?= $usuario['email'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Nova Senha:</label>
      <input type="password" name="senha" class="form-control">
    </div>
    <button class="btn btn-primary">Atualizar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
  </form>
</body>
</html>