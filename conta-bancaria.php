<?php

$nomeTitular = "Felipe Neves";
$saldoAtual = 2000.00;

do {

    echo "************************** \n";
    echo "Titular: $nomeTitular \n";
    echo "Saldo atual: $saldoAtual \n";
    echo "************************** \n";

    echo "1. Consultar saldo atual \n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor \n";
    echo "4. Sair \n";
    echo "Qual operaçaõ vc deseja realizar? ";

    $opcaoSelecionada = (int) fgets(STDIN);

    switch($opcaoSelecionada) {

        case 1:

            echo "************************** \n";
            echo "Titular: $nomeTitular \n";
            echo "Saldo atual: $saldoAtual \n";
            echo "************************** \n";

        break;

        case 2:
            
            echo "Informe o valor a sacar: ";
            $valorSaque = (float) fgets(STDIN);
        
            if($valorSaque < 0) {
                echo "Valor para saque incorreto. \n";
            }
        
            if($valorSaque > $saldoAtual) {
                echo "Nao ha saldo suficiente. \n";
            }
        
            if($valorSaque <= $saldoAtual) {
                $saldoAtual -= $valorSaque;
                echo "Saque de R$ $valorSaque realizado com sucesso. \n";
                echo "Saldo atual: R$ $saldoAtual \n";
            }

        break;

        case 3:

            echo "Informe o valor a depositar: ";
            $valorDeposito = (float) fgets(STDIN);
        
            if($valorDeposito <= 0) {
                echo "Valor para deposito incorreto. \n";
            }
        
            if($valorDeposito > 0) {
                $saldoAtual += $valorDeposito;
                echo "Deposito de R$ $valorDeposito realizado com sucesso. \n";
                echo "Saldo atual: R$ $saldoAtual \n";
            }

        break;

        case 4:

            echo "adeus";

        break;

        default:

            echo "Opçao Invalida";
            
        break;

    }

} while($opcaoSelecionada != 4);
