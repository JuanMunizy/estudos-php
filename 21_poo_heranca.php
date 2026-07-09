<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - POO: HERANCA E POLIMORFISMO
   ==========================================================================

// Classe abstrata - nao pode ser instanciada diretamente
abstract class Animal {
    protected string $nome; // protected: classe e filhas acessam

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    abstract public function fazerSom(): string; // filhas DEVEM implementar

    public function dormir(): string {
        return "{$this->nome} dormiu\n";
    }
}

// Heranca: Cachorro herda Animal
class Cachorro extends Animal {
    public function fazerSom(): string {
        return "Au Au!\n";
    }
}

class Gato extends Animal {
    public function fazerSom(): string {
        return "Miau!\n";
    }
}

// Polimorfismo: mesmo metodo, comportamentos diferentes
$animais = [new Cachorro("Rex"), new Gato("Mimi")];
foreach ($animais as $animal) {
    echo $animal->fazerSom(); // cada um faz seu som
}

// Palavras-chave:
// final class - nao pode ter filhas
// final method - nao pode ser sobrescrito
// parent:: - chama metodo da classe pai
*/ 
?>