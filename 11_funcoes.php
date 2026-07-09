<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - FUNCOES
   ==========================================================================

// Funcao simples
function saudacao($nome) {
    return "Ola, $nome!";
}
echo saudacao("Joao");

// Parametro com valor padrao
function apresentar($nome, $idade = "desconhecida") {
    echo "Nome: $nome, Idade: $idade\n";
}
apresentar("Joao");           // usa padrao
apresentar("Maria", 25);      // sobrescreve padrao

// Tipos nos parametros e retorno (PHP 7+)
function somar(float $a, float $b): float {
    return $a + $b;
}

// Parametros variaveis (spread)
function total(...$numeros) {
    return array_sum($numeros);
}
echo total(1, 2, 3, 4, 5);    // 15

// Passagem por referencia (&) - modifica a original
function addExclamao(string &$texto) {
    $texto .= "!";
}

// Arrow function (PHP 7.4+) - funcao anonima compacta
$dobro = fn($n) => $n * 2;
echo $dobro(5); // 10
*/ 
?>