<?php

// =====================================================================
// EXERCICIOS - PROGRAMACAO ORIENTADA A OBJETOS
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Crie uma classe Carro com propriedades publicas $marca, $modelo, $ano
//    Instancie um objeto e imprima "Marca: X, Modelo: Y, Ano: Z"



// 2. Adicione um construtor a classe Carro que define as propriedades ao instanciar



// 3. Adicione um metodo exibirDetalhes() que retorna uma string com os dados



// 4. Crie uma classe Contador com uma propriedade estatica $total
//    Incremente no construtor e crie um metodo estatico getTotal()



/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 5. Crie uma classe ContaBancaria:
//    - Propriedades privadas: $titular, $saldo
//    - Construtor com $titular e $saldo inicial
//    - Metodos: depositar($valor), sacar($valor), getSaldo()
//    - Nao permitir saque se saldo insuficiente



// 6. Crie uma classe Produto com $nome, $preco, $estoque
//    Metodo aplicarDesconto($percentual) que modifica o preco
//    Verifique se $percentual e valido (0 a 100)



// 7. Crie classes Cachorro e Gato que herdam de Animal:
//    Animal: $nome, __construct($nome), fazerSom() (abstract)
//    Cachorro: fazerSom() retorna "Au Au"
//    Gato: fazerSom() retorna "Miau"



// 8. Crie uma interface Vendavel com metodo calcularPrecoFinal()
//    Implemente em ProdutoFisico e ProdutoDigital
//    Fisico: preco + frete, Digital: preco - desconto



/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 9. Crie um sistema de biblioteca:
//    - Classe Livro: $titulo, $autor, $disponivel (bool)
//    - Classe Pessoa: $nome, $livrosEmprestados = []
//    - Classe Biblioteca:
//      * adicionarLivro(Livro $livro)
//      * emprestarLivro(Pessoa $pessoa, string $titulo)
//      * devolverLivro(Pessoa $pessoa, string $titulo)
//      * listarDisponiveis()



// 10. Crie um sistema de funcionarios com heranca e polimorfismo:
//     - Classe abstrata Funcionario: $nome, $salarioBase
//     - CalculaSalario() abstrato
//     - Desenvolvedor: salario = base + 20%
//     - Gerente: salario = base + 40% + bonus 1000
//     - Estagiario: salario = base - 50%
//     - Crie um array de funcionarios e calcule a folha de pagamento



// 11. Crie um sistema usando Trait, Interface e Classes:
//     - Trait Logavel: metodo log($msg) que salva em array
//     - Interface Exportavel: metodo toArray(), toJson()
//     - Classe Usuario implementa Exportavel e usa Logavel
//     - Classe Pedido implementa Exportavel e usa Logavel



// 12. Crie um container de injecao de dependencia simples:
//     - Classe Container com array de servicos
//     - Metodo set($nome, $instancia)
//     - Metodo get($nome) que retorna instancia
//     - Use para conectar Database, depois UserRepository usa Database


?>