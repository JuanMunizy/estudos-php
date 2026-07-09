<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - EXPRESSOES REGULARES (REGEX)
   ==========================================================================

$texto = "PHP 8.4 e a versao atual";

// preg_match() - verifica se o padrao existe (retorna 1 ou 0)
if (preg_match("/PHP/", $texto)) {
    echo "Encontrou PHP";
}

// Capturar grupos com () - extrai partes do texto
if (preg_match("/(\d+)\.(\d+)/", $texto, $m)) {
    echo $m[0]; // "8.4" (match completo)
    echo $m[1]; // "8" (primeiro grupo)
    echo $m[2]; // "4" (segundo grupo)
}

// preg_match_all() - encontra TODAS as ocorrencias
preg_match_all("/(\w+) tem (\d+) anos/", $texto, $matches);

// preg_replace() - substitui padroes
$limpo = preg_replace("/[^a-zA-Z0-9]/", "", $texto);

// preg_split() - divide por padrao
// $partes = preg_split("/[,\s]+/", $texto);

// Padroes comuns:
// Email:    /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i
// Telefone: /^\(\d{2}\)\s\d{4,5}-\d{4}$/
// URL:      /^https?:\/\/[\w\-]+(\.[\w\-]+)+[/#?]?.*$/
// So numeros: /^\d+$/
// So letras:  /^[a-zA-Z]+$/
*/ 
?>