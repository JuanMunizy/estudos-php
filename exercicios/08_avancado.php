<?php

// =====================================================================
// EXERCICIOS AVANCADOS - DESAFIOS GERAIS
// =====================================================================
// Topics: regex, filters, erros, datas, manipulacao avancada
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Valide um email usando filter_var()
//    Teste com: "joao@email.com", "joao@invalido"



// 2. Use preg_match para verificar se uma string contem apenas numeros



// 3. Crie uma data com DateTime e exiba no formato "07/2026"



// 4. Use try/catch para capturar uma divisao por zero (simule com Exception)



// 5. Sanitize uma string: remova tags HTML de "<script>alert('xss')</script><p>Oi</p>"



/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 6. Valide um formulario completo:
//    - Nome: minimo 3 caracteres
//    - Email: formato valido
//    - Idade: 0 a 150
//    - URL: formato valido
//    Retorne array com erros ou array vazio se tudo OK



// 7. Use expressao regular para extrair todos os numeros de um texto
//    "Joao tem 25 anos, Maria 30, e Pedro 22" -> [25, 30, 22]



// 8. Calcule a idade de uma pessoa a partir da data de nascimento
//    $nascimento = "1990-05-15"; Resultado: "34 anos" (ou a idade correta)



// 9. Crie uma funcao que valida CPF (apenas formato, nao os digitos)
//    Formato: 000.000.000-00



// 10. Crie um sistema de busca simples:
//     $lista = ["PHP", "JavaScript", "Python", "Java", "Ruby"];
//     Busque por "ja" e retorne ["Java", "JavaScript"]
//     Use preg_grep() ou str_contains()



/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 11. Crie uma funcao que valida CPF com calculo dos digitos verificadores
//     (validacao real, nao so formato)
//     1o digito: soma dos 9 primeiros * 10 % 11
//     2o digito: soma dos 10 primeiros * 10 % 11



// 12. Crie um parser de URL simples:
//     Entrada: "https://site.com/produtos?id=5&cat=eletronicos"
//     Saida: [
//         'protocolo' => 'https',
//         'dominio' => 'site.com',
//         'path' => '/produtos',
//         'query' => ['id' => '5', 'cat' => 'eletronicos']
//     ]



// 13. Crie um sistema de templates simples:
//     Funcao renderizar($template, $dados)
//     Template: "Ola, {{nome}}! Voce tem {{idade}} anos."
//     Dados: ["nome" => "Joao", "idade" => 30]
//     Resultado: "Ola, Joao! Voce tem 30 anos."



// 14. Crie uma funcao que agrupa array por chave:
//     $pessoas = [
//         ["nome" => "Joao", "cidade" => "SP"],
//         ["nome" => "Maria", "cidade" => "RJ"],
//         ["nome" => "Pedro", "cidade" => "SP"],
//     ];
//     agruparPor($pessoas, "cidade") ->
//     SP: [Joao, Pedro], RJ: [Maria]



// 15. Crie seu proprio framework MVC mini:
//     - Classe Router: adicionar rota, executar
//     - Classe Controller: metodo render($view, $dados)
//     - Classe Model: metodo query($sql)
//     - Simule uma requisicao e execute o fluxo completo


?>