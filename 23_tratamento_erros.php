<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - TRATAMENTO DE ERROS
   ==========================================================================

// try/catch - captura excecoes (erros controlados)
try {
    $num = 10;
    if ($num > 5) {
        throw new Exception("Numero muito grande");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();  // mensagem
    echo "Arquivo: " . $e->getFile();  // onde ocorreu
    echo "Linha: " . $e->getLine();    // linha do erro
} finally {
    echo "Sempre executa (com erro ou sem)";
}

// Excecoes personalizadas (criar sua propria classe de erro)
class SaldoException extends Exception {
    public function __construct(float $saldo) {
        parent::__construct("Saldo insuficiente: R$ $saldo");
    }
}

// Multiplos catches (cada tipo de excecao)
try {
    // codigo que pode dar erro
} catch (SaldoException $e) {
    // tratar erro de saldo
} catch (PDOException $e) {
    // tratar erro de banco
} catch (Exception $e) {
    // tratar qualquer outro erro
}
*/ 
?>