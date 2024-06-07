<?php

class CalcularDeMaratona {

    private int $duracaoMaratona = 0;

    public function adicionarTitulos(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function visualizarTempoDuracao(): int
    {
        return $this->duracaoMaratona;
    }

}