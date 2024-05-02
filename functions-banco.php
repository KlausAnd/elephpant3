<?php
function wrap(string $mensagem)
    {
        echo $mensagem . PHP_EOL;
    }

    function saque(array $id): float
    {
        $valor = readline('valor: ');
        if ($id['saldo'] < $valor){
            echo 'saldo insuficiente' . PHP_EOL;
        }
        else{
            $id ['saldo'] -= $valor;
            echo 'Saque realizado com sucesso na conta de ' . $id['titular'] . PHP_EOL;
        }
        return $id ['saldo'];
    }

    function deposito(array $id): float
    {
        $valor = readline('valor: ');
        if ($valor < 0){
            echo 'valor inválido'. PHP_EOL;
        }
        else{
            $id ['saldo'] += $valor;
            echo 'Depósito realizado com sucesso na conta de ' . $id['titular'] . PHP_EOL;
        }
        return $id ['saldo'];
    }

/* trabalhando key error
    function addConta($newId){
        $nome = readline('Nome do titular: ');
        $newId = [
            'titular' => $nome,
            'saldo' => 0
        ];
        return $newId;
    } */