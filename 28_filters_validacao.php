<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - FILTERS: VALIDACAO E SANITIZACAO
   ==========================================================================

// --- FUNCOES PRINCIPAIS ---
// filter_var()  - filtra uma variavel
// filter_input()- filtra input externo (GET, POST, etc)
// strip_tags()  - remove tags HTML

// --- VALIDACAO (retorna false se invalido) ---

// Email
filter_var("user@email.com", FILTER_VALIDATE_EMAIL);

// URL
filter_var("https://exemplo.com", FILTER_VALIDATE_URL);

// IP
filter_var("192.168.1.1", FILTER_VALIDATE_IP);

// Inteiro com range
filter_var("25", FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 0, 'max_range' => 150]
]);

// Float
filter_var("29.99", FILTER_VALIDATE_FLOAT);

// Boolean (true, false, 1, 0, "yes", "no")
filter_var("true", FILTER_VALIDATE_BOOLEAN);

// --- SANITIZACAO (remove caracteres invalidos) ---

// Remover tags HTML
strip_tags("<script>alert('x')</script><p>Ola</p>");

// Sanitizar email
filter_var(" usuario@e(x)emplo.com ", FILTER_SANITIZE_EMAIL);

// Sanitizar URL
filter_var("https://exem plo.com", FILTER_SANITIZE_URL);

// Sanitizar inteiro (so numeros)
filter_var("abc123def", FILTER_SANITIZE_NUMBER_INT);

// filter_input - para dados vindos do usuario
// $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
*/ 
?>