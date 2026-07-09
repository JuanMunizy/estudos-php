<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - POO: CLASSES E OBJETOS
   ==========================================================================

// Definicao de classe
class Usuario {
    // Propriedades com tipos (PHP 7.4+)
    public string $nome;
    private string $senha;     // so a classe acessa
    public static int $total = 0; // pertence a classe, nao a instancia

    // Constante de classe
    const NIVEL_ADMIN = 10;

    // Construtor (PHP 8+ - promocao de propriedades)
    public function __construct(
        public string $email,
        string $senha
    ) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        self::$total++; // acessa propriedade estatica
    }

    // Metodo
    public function saudacao(): string {
        return "Ola, {$this->nome}!";
    }

    // Getter (acessar propriedade privada)
    public function getSenha(): ?string {
        return $this->senha ?? null;
    }

    // Metodo estatico (chamado sem instanciar)
    public static function totalUsuarios(): string {
        return "Total: " . self::$total;
    }
}

// Instanciar (criar objeto)
$user = new Usuario("joao@email.com", "123456");
$user->nome = "Joao";
echo $user->saudacao();   // Ola, Joao!
echo Usuario::totalUsuarios(); // metodo estatico
*/ 
?>