<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - FOREACH (loop para arrays)
   ==========================================================================

// foreach basico - percorre os valores do array
$frutas = ["maca", "banana", "laranja"];
foreach ($frutas as $fruta) {
    echo "$fruta\n";
}

// foreach com chave e valor
$pessoa = ["nome" => "Joao", "idade" => 30];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor\n";
}

// foreach por referencia (&) - modifica o array original
foreach ($frutas as &$fruta) {
    $fruta = strtoupper($fruta);
}
unset($fruta); // sempre remova a referencia apos o loop

// break - interrompe o loop
// continue - pula para a proxima iteracao
*/ 
?>