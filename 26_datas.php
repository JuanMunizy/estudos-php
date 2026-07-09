<?php

// >>> SEU CÓDIGO AQUI <<<
// Escreva seu codigo aqui. Exemplos na sessao abaixo (descomente pra testar).





/* ==========================================================================
   REFERENCIA - DATAS E HORAS
   ==========================================================================

// date() - funcao basica para formatar data/hora
echo date("d/m/Y H:i:s"); // 08/07/2026 15:30:00
echo date("Y-m-d");       // 2026-07-08
echo time();              // timestamp atual (segundos desde 1970)

// DateTime - classe moderna e mais poderosa
$agora = new DateTime();
echo $agora->format("d/m/Y H:i:s");

// Criar data especifica
$data = new DateTime("1990-05-15");

// Modificar data
$data->modify("+10 days");       // soma 10 dias
$data->add(new DateInterval("P1M"));  // +1 mes
$data->sub(new DateInterval("P10D")); // -10 dias

// Diferenca entre datas
$hoje = new DateTime("now");
$diff = $hoje->diff($data);
echo $diff->days . " dias de diferenca";

// Fuso horario
$fuso = new DateTimeZone("America/Sao_Paulo");
$data = new DateTime("now", $fuso);

// strtotime - texto para timestamp
echo date("d/m/Y", strtotime("next monday"));
echo date("d/m/Y", strtotime("+2 weeks"));
*/ 
?>