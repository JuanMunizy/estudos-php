<?php

// =====================================================================
// EXERCICIOS - ARQUIVOS, JSON, PDO E BANCO DE DADOS
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Crie um arquivo "teste.txt" e escreva "Ola, arquivo!" nele



// 2. Leia o arquivo "teste.txt" e imprima o conteudo



// 3. Converta o array $dados = ["nome" => "Joao", "idade" => 30] para JSON



// 4. Pegue o JSON '{"nome":"Maria","idade":25}' e converta para array PHP
//    Depois imprima o nome



// 5. Salve o array do exercicio 3 em um arquivo "dados.json"



/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 6. Crie um sistema de logging simples:
//    Funcao log($mensagem) que adiciona uma linha com data/hora no arquivo "log.txt"
//    Formato: "[2026-07-08 10:30:00] mensagem"



// 7. Leia o arquivo "log.txt" e exiba apenas as linhas de hoje



// 8. Crie um arquivo CSV com dados de produtos (nome, preco, qtd)
//    Depois leia e exiba em formato de tabela



// 9. Crie uma classe Database que conecta via PDO (simulado com array)
//    Metodos: query($sql), fetch(), fetchAll()
//    Use try/catch para tratar erros



// 10. Salve e leia um array de objetos em JSON:
//     $produtos = [
//         ["id" => 1, "nome" => "PC", "preco" => 3500],
//         ["id" => 2, "nome" => "Mouse", "preco" => 150],
//     ];
//     Salve em "produtos.json", depois leia e calcule o valor total



/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 11. Crie um mini banco de dados em JSON com CRUD completo:
//     - Funcao criar($arquivo, $dados)
//     - Funcao listar($arquivo)
//     - Funcao buscar($arquivo, $id)
//     - Funcao atualizar($arquivo, $id, $novosDados)
//     - Funcao deletar($arquivo, $id)
//     Teste com arquivo "clientes.json"



// 12. Crie um sistema de backup automatico:
//     - Copie arquivos de uma pasta para outra com data no nome
//     - "dados.json" -> "backup/dados_2026-07-08.json"
//     - Mantenha apenas os ultimos 5 backups (delete os mais antigos)



// 13. Simule um banco de dados relacional com arquivos:
//     - "usuarios.json" e "pedidos.json"
//     - Cada pedido tem usuario_id
//     - Crie funcao que lista pedidos de um usuario especifico
//     - (relacionamento 1:N simulado)



// 14. Crie um sistema de importacao/exportacao:
//     - Importar CSV para JSON
//     - Exportar JSON para CSV
//     - Lidar com cabecalhos e dados
//     - Validar dados antes de importar


?>