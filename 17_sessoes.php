<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - SESSOES
   ==========================================================================

// session_start() - DEVE vir antes de qualquer saida HTML
session_start();

// Armazenar dados na sessao (ficam no servidor)
$_SESSION['usuario_id'] = 1;
$_SESSION['usuario_nome'] = 'Joao';

// Ler dados da sessao
echo $_SESSION['usuario_nome'];

// Verificar se existe
if (isset($_SESSION['usuario_id'])) {
    echo "Logado";
}

// Destruir sessao (logout)
// $_SESSION = [];
// session_destroy();

// Exemplo de login
function login($email, $senha) {
    // verificar no banco...
    session_regenerate_id(true); // seguranca
    $_SESSION['user_id'] = 1;
    return true;
}
*/ 
?>