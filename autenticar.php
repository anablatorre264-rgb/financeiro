<?php
require_once 'config.php';
require_once 'mensagens.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? ''; 
 
    $senha = $_POST['senha'] ?? '';
    // echo "Email:$email - Senha:$senha";

    // Validar campos
    if (empty($email) || empty($senha)) {
        set_mensagem('Preencha todos os campos', 'erro');
        header('Location: login.php');
        exit;
    }

    // Buscar o usuario no BD
    $sql = "SELECT * FROM usuario WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    // Verificar se o usuario existe e se a senha esta correta
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        // Login bem-sucedido
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_email'] = $usuario['email'];

        header('Location: index.php');
        exit;
    } else {
        set_mensagem('E-mail ou senha incorreta X!', 'erro');
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
