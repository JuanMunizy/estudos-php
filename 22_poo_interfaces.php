<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - POO: INTERFACES E TRAITS
   ==========================================================================

// Interface - define um CONTRATO (o que a classe DEVE implementar)
interface LoggerInterface {
    public function log(string $msg): void;
    public function getLogs(): array;
}

// Implementar interface
class FileLogger implements LoggerInterface {
    private array $logs = [];

    public function log(string $msg): void {
        $this->logs[] = $msg;
        file_put_contents("log.txt", "$msg\n", FILE_APPEND);
    }

    public function getLogs(): array {
        return $this->logs;
    }
}

// Trait - reuso de codigo (evita duplicacao)
trait TimestampTrait {
    public function agora(): string {
        return date("d/m/Y H:i:s");
    }
}

// Usando trait (como se copiasse o codigo pra dentro da classe)
class Produto {
    use TimestampTrait;

    public function __construct(
        public string $nome,
        public float $preco
    ) {}
}

$p = new Produto("Teclado", 299.90);
echo $p->agora(); // metodo vindo da trait
*/ 
?>