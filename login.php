<?php
require_once 'config.php';
require_once 'mensagens.php';


if (isset($_SESSION['usuario_id'])) {
  header("Location: index.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistema Financeiro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="login">
    <h1>Login - Sistema Financeiro</h1>

    <?php exibir_mensagem(); ?>

    <form action="autenticar.php" method="post">
      <div class="email">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <br>
      <div>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
      </div>
      <br>
      <div>
        <button class="btn btn-primary" type="submit">Entrar</button>
      </div>

    </form>

    <p>Não tem conta? <a href="registro.php">Cadastre-se aqui.</a></p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>