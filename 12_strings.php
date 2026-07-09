<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - MANIPULACAO DE STRINGS
   ==========================================================================

$texto = "  Ola, mundo!  ";

// Tamanho
strlen($texto);              // com acentos
mb_strlen($texto);          // multibyte (acentos)

// Limpeza de espacos
trim($texto);               // tira espacos dos dois lados
ltrim($texto);              // tira da esquerda
rtrim($texto);              // tira da direita

// Caixa alta/baixa
strtoupper("php");          // PHP
strtolower("PHP");          // php
ucfirst("php e legal");     // Php e legal
ucwords("php e legal");     // Php E Legal

// Busca
strpos($texto, "mundo");    // posicao ou false
str_contains($texto, "PHP"); // true/false
str_starts_with($texto, "Ola"); // true/false

// Substituicao
str_replace("PHP", "JS", $texto);

// Recortar
substr($texto, 0, 5);       // primeiros 5 caracteres
substr($texto, -3);         // ultimos 3 caracteres

// Dividir e juntar
explode(",", "a,b,c");      // ["a", "b", "c"]
implode(", ", ["a", "b"]);  // "a, b"

// Seguranca (escapar HTML)
htmlspecialchars("<script>"); // &lt;script&gt;
*/ 
?>