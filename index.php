<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Usuários</h2>
  <a href="criar.php" class="btn btn-success mb-3">Novo Usuário</a>
  <table class="table table-bordered">
    <thead>
      <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
    </thead>
    <tbody>
      <?php
      $stmt = $pdo->query("SELECT * FROM usuario");
      foreach ($stmt as $row) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['nome']}</td>
                  <td>{$row['email']}</td>
                  <td>
                    <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                    <a href='excluir.php?id={$row['id']}' class='btn btn-danger btn-sm'>Excluir</a>
                  </td>
                </tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>