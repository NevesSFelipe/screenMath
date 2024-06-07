<?php

function adicionarFilme(string $nomeFilme, int $anoLancamento, float $nota, string $genero): array
{
    $filme = [
        "nome" => $nomeFilme,
        "ano" => $anoLancamento,
        "nota" => $nota,
        "genero" => $genero
    ];

    return $filme;
}

function exibirMensagemLancamento(int $anoLancamento): void
{    
 
    if($anoLancamento > 2022) {
        echo "Esse filme é lançamento \n";
    } elseif($anoLancamento > 2020 && $anoLancamento < 2022) {
        echo "Esse filme ainda é novo \n";
    } else {
        echo "Esse filme nao é lançamento \n";
    }

}

function filmeIncluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}