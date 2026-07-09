<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).

$nome = "Juan";
$idade  = 40;
$altura = 1.80;

function teste() {
    global $nome; 
    echo $GLOBALS['nome'];
    
}
teste();



/* ==========================================================================
   REFERENCIA - VARIAVEIS
   ==========================================================================

// Toda variavel comeca com $ seguido do nome
$nome = "Joao";     // string
$idade = 25;        // int
$altura = 1.75;     // float

// PHP e dinamicamente tipado (muda de tipo automaticamente)
$valor = "texto";
$valor = 42;        // agora e inteiro

// Escopo de variaveis
function teste() {
    global $nome;          // acessa variavel global
    echo $GLOBALS['nome']; // outra forma de acessar global
}

// Funcoes uteis:
// isset($var)  - retorna true se existe e nao e null
// empty($var)  - retorna true se vazia (0, "", null, false, [])
// unset($var)  - destroi a variavel
*/ 
?>