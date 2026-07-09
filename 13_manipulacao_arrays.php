<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - FUNCOES AVANCADAS DE ARRAY
   ==========================================================================

$nums = [5, 2, 8, 1, 9, 3];

// Adicionar/Remover elementos
array_push($nums, 10);    // adiciona no final
array_pop($nums);          // remove do final
array_shift($nums);        // remove do inicio
array_unshift($nums, 0);   // adiciona no inicio

// Ordenacao
sort($nums);    // crescente (modifica o array)
rsort($nums);   // decrescente
asort($nums);   // mantem associacao chave/valor

// Filter - filtra elementos (aplica condicao)
$pares = array_filter($nums, fn($n) => $n % 2 == 0);

// Map - transforma cada elemento
$dobrados = array_map(fn($n) => $n * 2, $nums);

// Reduce - reduz a um unico valor
$soma = array_reduce($nums, fn($c, $n) => $c + $n, 0);

// Busca
in_array(5, $nums);         // true se existe
array_search(5, $nums);     // indice do valor

// Diferenca e interseccao
array_diff([1,2,3], [2,3,4]);    // [1] (o que tem em A mas nao em B)
array_intersect([1,2,3], [2,3,4]); // [2,3] (o que tem em ambos)

// Outras uteis
array_unique([1,2,2,3]);    // remove duplicatas
array_chunk([1,2,3,4,5], 2); // [[1,2], [3,4], [5]]
array_column($pessoas, 'nome'); // extrai coluna de array multidimensional
*/ 
?>