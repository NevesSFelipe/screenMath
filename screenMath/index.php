<?php

require __DIR__ . '/src/functions.php';

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
$incluidoNoPlano = filmeIncluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme \n";
echo "ano de Lançamento: $anoLancamento \n";

exibirMensagemLancamento($anoLancamento);

$generoFilme = match($nomeFilme) {
    "Velozes e Furiosos" => "açao",
    "Jogos Mortais" => "terror",
    "Se beber, nao case" => "comédia",
    default => "desconhecido"
};

echo "O genero do filme é $generoFilme \n";

$filme = adicionarFilme(
    nomeFilme: "O auto da compadecida", 
    anoLancamento: 2002, 
    nota: 9.8, 
    genero: "comedia"
);

$filmeEmJSON = json_encode($filme);
file_put_contents(__DIR__ . "/filmes.json", $filmeEmJSON);