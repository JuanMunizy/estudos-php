<?php

// =====================================================================
// EXERCICIOS - FORMULARIOS, SESSOES E COOKIES
// =====================================================================
// Para testar formularios: php -S localhost:8000
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Use $_SERVER para imprimir o metodo da requisicao atual
//    (GET, POST, CLI)



// 2. Simule $_GET: crie um array manual simulando ?nome=Joao&idade=30
//    E imprima os valores



// 3. Inicie uma sessao e armazene $_SESSION['visitas'] incrementando a cada execucao



// 4. Crie um cookie com nome "preferencia_tema" e valor "escuro" que dura 7 dias



/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 5. Crie um contador de visitas usando sessao
//    Cada vez que o script roda, incrementa o contador
//    Exiba "Voce visitou esta pagina X vezes"



// 6. Simule um login simples com sessao:
//    - Se $_SESSION['logado'] nao existir, exiba "Faca login"
//    - Senao, exiba "Bem-vindo, [usuario]!"
//    Crie uma funcao login($user) e logout()



// 7. Crie um sistema de preferencias com cookie:
//    - Leia $_COOKIE['idioma'] se existir
//    - Senao, defina "pt-BR" como padrao e salve no cookie



// 8. Crie um formulario HTML simples (simule com var_dump de $_POST)
//    com campos: nome, email, mensagem
//    Se REQUEST_METHOD == POST, exiba os dados recebidos



/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 9. Crie um sistema de carrinho de compras basico com sessao:
//    - $_SESSION['carrinho'] = []
//    - Funcao adicionarItem($produto, $qtd, $preco)
//    - Funcao removerItem($produto)
//    - Funcao calcularTotal()
//    - Funcao limparCarrinho()



// 10. Crie um sistema de "lembrar de mim" com cookie + sessao:
//     - Se cookie "lembrar" existir, preenche a sessao automaticamente
//     - Senao, pede login
//     - O cookie expira em 30 dias



// 11. Crie um CRUD completo em arquivo JSON (simulando banco):
//     - Usar $_GET ou array para simular acoes: criar, listar, editar, deletar
//     - Dados guardados em um arquivo .json
//     - Produtos: id, nome, preco, quantidade


?>