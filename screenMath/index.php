<?php

require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/Serie.php';
require __DIR__ . '/src/Calculos/CalculadoraDeMaratona.php';

echo "Bem vindo(a) ao ScreenMath \n";

$filme = new Filme(nome: "O Livro de Eli", anoLancamento: 2014, genero: Genero::Drama, tempoDuracao: 180);
$filme->avaliarTitulo(10);
$filme->avaliarTitulo(5);
$filme->calcularMediaNota();

$serie = new Serie(nome: "24 Horas", anoLancamento: 2001, genero: Genero::Drama, temporadas: 9, episodiosPorTemporada: 24, duracaoEpisodio: 42);
$serie->avaliarTitulo(10);
$serie->avaliarTitulo(9.9);

$calculadora = new CalcularDeMaratona();
$calculadora->adicionarTitulos($filme);
$calculadora->adicionarTitulos($serie);
$duracao = $calculadora->visualizarTempoDuracao();

// echo "<pre>";
// print_r($filme);
// echo "</pre>";

// echo "<pre>";
// print_r($serie);
// echo "</pre>";

echo "Essa maratona vai durar $duracao minutos.";