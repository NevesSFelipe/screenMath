<?php

echo "Bem vindo(a) ao screen match \n";

$nomeFilme = "Velozes e Furiosos";
$nomeFilme = "Jogos Mortais";
$nomeFilme = "Se beber, nao case";

$anoLancamento = 2022;

$totalNotasFilme = $argc - 1;
$notas = [];
for($i = 1; $i < $argc; $i++) {
    $notas[] = (float) $argv[$i];
}

$notaFilme = array_sum($notas) / $totalNotasFilme;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "ano de Lançamento: $anoLancamento \n";

if($anoLancamento > 2022) {
    echo "Esse filme é lançamento \n";
} elseif($anoLancamento > 2020 && $anoLancamento < 2022) {
    echo "Esse filme ainda é novo \n";
} else {
    echo "Esse filme nao é lançamento \n";
}


$generoFilme = match($nomeFilme) {
    "Velozes e Furiosos" => "açao",
    "Jogos Mortais" => "terror",
    "Se beber, nao case" => "comédia",
    default => "desconhecido"
};

echo "O genero do filme é $generoFilme \n";

$filme = [
    "nome" => "O auto da compadecida",
    "ano" => "2002",
    "nota" => 9.8,
    "genero" => "comedia"
];