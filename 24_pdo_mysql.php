<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - PDO (BANCO DE DADOS)
   ==========================================================================

// Configuracao da conexao
$config = [
    'host' => 'localhost',
    'dbname' => 'meu_banco',
    'user' => 'root',
    'pass' => '',
];

// Conectar (sempre em try/catch)
try {
    $pdo = new PDO(
        "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4",
        $config['user'],
        $config['pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // erros viram excecao
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // array associativo
            PDO::ATTR_EMULATE_PREPARES => false, // prepared de verdade
        ]
    );
} catch (PDOException $e) {
    die("Erro de conexao: " . $e->getMessage());
}

// INSERT com prepared statement (SEGURO contra SQL injection)
$stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
$stmt->execute([':nome' => 'Joao', ':email' => 'joao@email.com']);

// SELECT
$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(); // todos os registros

// SELECT com parametro
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
$stmt->execute([':id' => 1]);
$user = $stmt->fetch(); // um registro

// ATENCAO: NUNCA concatene dados do usuario no SQL!
// ERRADO: $pdo->query("SELECT * FROM usuarios WHERE email = '$email'");
// CERTO: prepared statement com :parametro
*/ 
?>