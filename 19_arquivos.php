<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - MANIPULACAO DE ARQUIVOS
   ==========================================================================

$arquivo = __DIR__ . '/teste.txt';

// Escrever (sobrescreve o conteudo)
file_put_contents($arquivo, "Conteudo\n");

// Escrever (adiciona ao final - append)
file_put_contents($arquivo, "Mais conteudo\n", FILE_APPEND);

// Ler arquivo inteiro
$conteudo = file_get_contents($arquivo);

// Ler como array (cada linha e um elemento)
$linhas = file($arquivo);

// fopen/fgets/fclose (controle linha a linha)
$handle = fopen($arquivo, "r"); // r=leitura, w=escrita, a=append
while ($linha = fgets($handle)) {
    echo $linha;
}
fclose($handle);

// Informacoes do arquivo
file_exists($arquivo);  // existe?
filesize($arquivo);     // tamanho em bytes
filemtime($arquivo);    // data da ultima modificacao
unlink($arquivo);       // deletar arquivo

// CSV
fputcsv($handle, ["nome", "email"]);
fgetcsv($handle);

// JSON
file_put_contents("dados.json", json_encode($dados));
json_decode(file_get_contents("dados.json"), true);
*/ 
?>