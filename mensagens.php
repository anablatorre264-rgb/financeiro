<?php
// Funçao para definir uma msg
function set_mensagem($mensagem, $tipo) {
    $_SESSION['mensagem'] = $mensagem;
    $_SESSION['mensagem_tipo'] = $tipo;
}

// Funçao para exibir uma msg
function exibir_mensagem() {
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
        $tipo = $_SESSION['mensagem_tipo'];

        echo '<div class="alert alert-danger" role="alert" mensagem mensagem-' .$tipo.'">';
        echo '<p>'.$mensagem.'</p>';
        echo '</div>';

        // Limpar as variáveis de sessão
        unset($_SESSION['mensagem']);
        unset($_SESSION['mensagem_tipo']);

    }
}
?>