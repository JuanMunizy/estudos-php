<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - COOKIES
   ==========================================================================

// setcookie(nome, valor, expiracao)
setcookie("tema", "escuro", time() + 86400 * 30); // 30 dias

// Cookie com opcoes de seguranca (PHP 7.3+)
setcookie("token", "abc123", [
    'expires' => time() + 86400,
    'path' => '/',
    'secure' => true,      // apenas HTTPS
    'httponly' => true,    // inacessivel via JavaScript
    'samesite' => 'Strict' // protecao CSRF
]);

// Ler cookie
$tema = $_COOKIE['tema'] ?? 'claro'; // valor padrao se nao existir

// Remover cookie (definir expiracao no passado)
// setcookie("tema", "", time() - 3600);

// CUIDADO: cookies ficam visiveis no navegador!
// Nao armazene dados sensiveis (senhas, tokens secretos)
*/ 
?>