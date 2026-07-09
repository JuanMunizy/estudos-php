<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - JSON
   ==========================================================================

// Array PHP
$dados = [
    'nome' => 'Joao',
    'idade' => 30,
    'email' => 'joao@email.com',
];

// PHP -> JSON (converter para string JSON)
$json = json_encode($dados);
echo $json; // {"nome":"Joao","idade":30,"email":"joao@email.com"}

// JSON formatado (legivel)
$json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// JSON -> PHP array associativo (true = array, sem = objeto)
$array = json_decode($json, true);
echo $array['nome']; // Joao

// JSON -> PHP objeto
$obj = json_decode($json);
echo $obj->nome;     // Joao

// Verificar erros
if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Erro: " . json_last_error_msg();
}
*/ 
?>