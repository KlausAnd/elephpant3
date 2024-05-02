<?php
    echo"\tContas" . PHP_EOL;

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

    $contasCorrentes = [
        '000.000.000-00' => [
            'titular' => "Luis",
            'saldo' => 2343.64
        ],
        '434.431.234-53' => [
            'titular' => "Joao",
            'saldo' => 153.24
        ],
        '153.324.234-42' => [
            'titular' => "Maria",
            'saldo' => 9330.87
        ]
    ];

    $menu = readline('Visualizar lista? \'s\' ou \'n\' ');
    if($menu == 's'){
        echo  "\tprocessando..." . PHP_EOL;
        foreach ($contasCorrentes as $cpf => $conta) {
            echo $cpf . " ". $conta['titular'] . " " . $conta['saldo'] . PHP_EOL; 
        }
    }    
    $opt = readline("Deseja sacar de alguma conta? s ou n: ");
    if($opt == 's'){
        $idSaque = readline('Digite o cpf no padrão XXX.XXX.XXX-XX:  ');
        $contasCorrentes[$idSaque]['saldo'] = saque($contasCorrentes[$idSaque]);
    }
    $opt = readline('Deseja realizar depósito? s ou n: ');
    if($opt == 's'){
        $idSaque = readline('Digite o cpf no padrão XXX.XXX.XXX-XX:  ');
        $contasCorrentes[$idSaque]['saldo'] = deposito($contasCorrentes[$idSaque]);
    }