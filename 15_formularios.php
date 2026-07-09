<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).
// Dica: php -S localhost:8000 e acesse http://localhost:8000/15_formularios.php





/* ==========================================================================
   REFERENCIA - FORMULARIOS
   ==========================================================================

// Formulario HTML basico
<form method="POST" action="">
    <input type="text" name="nome" required>
    <input type="email" name="email" required>
    <button type="submit">Enviar</button>
</form>

// Processamento no PHP (mesmo arquivo)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
}

// Regras de seguranca:
// 1. htmlspecialchars() ao exibir dados do usuario
// 2. filter_var() para validar emails, numeros, etc
// 3. password_hash() para armazenar senhas
// 4. Nao confie em nada vindo do usuario
*/ 
?>