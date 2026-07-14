<?php

// =====================================================================
// EXERCICIOS - SINTAXE BASICA E VARIAVEIS
// =====================================================================
// Resolva os exercicios abaixo, do mais facil ao mais dificil
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Imprima "Ola, mundo!" na tela
echo "Ola, mundo!";



// 2. Crie uma variavel $nome com seu nome e imprima "Ola, $nome"
$nome = "Juan";
echo "Ola, $nome";


// 3. Crie duas variaveis $a e $b com valores 10 e 5, imprima a soma
$a = 10;
$b = 5;

echo $a + $b;


// 4. Crie uma constante MINHA_IDADE com sua idade e imprima

const MINHA_IDADE = 22;
echo MINHA_IDADE;



// 5. Crie uma variavel $preco com valor 49.90 e imprima "R$ 49.90"
$preco = 49.90;
echo "R$ $preco";



/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 6. Troque o valor de duas variaveis entre si
//    $x = "azul", $y = "vermelho" -> depois da troca $x="vermelho", $y="azul"
$x = "azul";
$y = "Vermelho";

$temp = $x;
$x = $y;
$y = $temp;


echo $x; 
echo $y;
// 7. Crie uma funcao que recebe um nome e retorna "Ola, [nome]!"
//    Chame a funcao e imprima o resultado

function saudacao ($nome)  {
   return "Ola, $nome!";
}
echo saudacao("Juan");



// 8. Use isset() e empty() para verificar se uma variavel existe e se esta vazia
//    Teste com $var1 = ""; $var2 = "texto"; $var3;
$var1  = "";
$var2 = "texto";

echo isset($var1);
echo isset($var2);
echo isset($var3);

echo empty($var1);
echo empty($var2);
echo empty($var3);


// 9. Crie uma funcao que soma dois numeros e retorna o resultado.
//    Depois crie uma funcao que usa essa funcao para calcular uma media
 $y  = 10;
 $x = 20;

 function soma($y, $x) {
    return $y + $x;
 }

 function media($y, $x) {
   return soma($y, $x) / 2;
}
echo soma(10, 20);
echo media(10, 20);


/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 10. Sem usar variavel temporaria, troque os valores de $a e $b
//     $a = 5; $b = 10; (dica: use array ou operacoes matematicas)
$A = 5;
$B = 10;

[$A, $B] = [$B, $A];
echo $A;
echo $B;


// 11. Crie um sistema simples de calculadora usando funcoes
//     Criar funcoes: somar, subtrair, multiplicar, dividir
//     Depois criar uma funcao "calcular($a, $b, $op)" que chama a funcao certa
function somar($a, $b) {
   return $a + $b;
}

function subtrair ($a, $b) {
   return $a  - $b;
}

function multiplicar($a, $b) {
   return $a * $b;
}

function dividir ($a, $b) {
   return $a / $b;
}

function calcular($a, $b, $op) {
   switch ($op) {
         case "+":
            return somar($a, $b);
            break;
         case "-":
            return subtrair($a, $b);
            break;
         case "*":
            return multiplicar($a, $b);
            break;
         case "/":
            return dividir($a, $b);
            break;
         default:
            return "Operacao invalida";
   }
}

echo calcular(10, 5, "+");
echo calcular(10, 5, "-");
echo calcular(10, 5, "*");
echo calcular(10, 5, "/");

// 12. Crie uma funcao recursiva que calcula o fatorial de um numero
//     Fatorial de 5 = 5 * 4 * 3 * 2 * 1 = 120


?>