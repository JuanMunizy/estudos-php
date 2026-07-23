<?php

// =====================================================================
// EXERCICIOS - IF / ELSE / SWITCH
// =====================================================================






/* ------------------------------------------
   FACIL
   ------------------------------------------ */

// 1. Crie uma variavel $idade. Se for >= 18 imprima "Maior de idade",
//    senao "Menor de idade"
$idade = 18;

if ($idade >= 18) {
   echo "Maior de idade";
}else {
   echo "menor de idade";
} 


// 2. Crie uma variavel $nota (0 a 10). Se for >= 7 imprima "Aprovado",
//    senao "Reprovado"

$nota = 7;
if ($nota >= 7) {
   echo "Aprovado";
} else {
   echo "Reprovado";
}


// 3. Use switch para imprimir o dia da semana baseado em $dia (1 a 7)
$dia = 7;
switch ($dia) {
   case 1:
      echo "Domingo";
      break;
   case 2:        
      echo "Segunda";
      break;
   case 3:
      echo "Terca";
      break;
   case 4:        
      echo "Quarta";
      break;
   case 5:
      echo "Quinta";
      break;
   case 6:
      echo "Sexta";
      break;
   case 7:
      echo "Sabado";
      break;
   default:
      echo "Dia invalido";
      break;
}



// 4. Verifique se um numero e par ou impar usando if/else
$numero = 4;
if ($numero % 2 == 0) {
   echo "Par";
} else {
   echo "Impar";
}

/* ------------------------------------------
   MEDIO
   ------------------------------------------ */

// 5. Crie um sistema de notas com conceitos:
//    A (90-100), B (80-89), C (70-79), D (60-69), F (<60)
$nota = 100;

if ($nota >= 90 && $nota <= 100) {
   echo "A";
} else if ($nota >= 80 && $nota <= 89) {
   echo "B";
} else if ($nota >= 70 && $nota <= 79) {
   echo "C";
} else if ($nota >= 60 && $nota <= 69) {
   echo "D";
} else if ($nota < 60) {
   echo "F";
} else {
   echo "Nota invalida";
}


// 6. Use o operador ternario para definir $acesso:
//    Se $admin for true, "total", senao "restrito"
$admin  = true;
$acesso = $admin ? "total" : "restrito";
echo $acesso;


// 7. Crie um switch que retorna o preco baseado no mes:
//    Janeiro = Ferias, Julho = Ferias, Dezembro = Ferias
//    Outros = "Mes normal"
$mes = "Janeiro";
switch ($mes) {
   case "Janeiro":
   case "Julho":        

      echo "Ferias";
      break;
   case "Dezembro":
      echo "Ferias"; 
       break;
   default:
      echo "Mes normal";
      break;
}


// 8. Valide um login: se email = "admin@email.com" E senha = "123" -> "OK"
//    senao -> "Dados incorretos". Teste com dados certos e errados.
$email = "";
$senha = "";

if ($email == "admin@email.com" && $senha == "123") {
   echo "OK";
} else {
   echo "Dados incorretos";
}

/* ------------------------------------------
   DIFICIL
   ------------------------------------------ */

// 9. Crie um calculo de IMC:
//    Abaixo de 18.5 = "Abaixo do peso"
//    18.5 - 24.9 = "Peso normal"
//    25 - 29.9 = "Sobrepeso"
//    30+ = "Obesidade"
//    IMC = peso / (altura * altura)



// 10. Simule um caixa eletronico com saques de:
//     10, 20, 50, 100 reais
//     O usuario informa o valor e o programa diz quantas notas de cada
//     Ex: 180 = 1 de 100 + 1 de 50 + 1 de 20 + 1 de 10



// 11. Jogo pedra-papel-tesoura:
//     O usuario escolhe (variavel $jogador) e o computador sorteia
//     Use rand(0,2) para o computador (0=pedra, 1=papel, 2=tesoura)
//     Determine quem ganhou


?>