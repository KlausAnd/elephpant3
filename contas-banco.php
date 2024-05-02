<?php
    echo"\tContas" . PHP_EOL;

    function addConta($newId){
        $newId['titular'] = readline('titular: ');
        $newId['saldo'] = 0;
        return $newId;
    }

    function saque($id){
        $valor = readline('valor: ');
        if ($id['saldo'] < $valor){
            echo 'saldo insuficiente' . PHP_EOL;
            return $id['saldo'];
        }
        $id ['saldo'] -= $valor;
        return $id ['saldo'];
    }

    $contasCorrentes = [
        '522.443.322-31' => [
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

    $contasCorrentes['394.453.421-32'] = [
            'titular'=> 'Joana',
            'saldo' => 3244.33 
    ];

    $menu = readline('Visualizar lista? \'s\' ou \'n\' ');
    if($menu == 's'){
        echo  "processando..." . PHP_EOL;
        foreach ($contasCorrentes as $cpf => $conta) {
            echo $cpf . " ". $conta['titular'] . " " . $conta['saldo'] . PHP_EOL; 
        }
    }    

    $opt = readline('Deseja sacar de Luis? s ou n: ');
    if($opt == 's'){
        $contasCorrentes['522.443.322-31']['saldo'] = saque($contasCorrentes['522.443.322-31']);
    }

    $nova = readline('cpf: ');
    $contasCorrentes[$nova] = addConta($contasCorrentes[$nova]);

    foreach ($contasCorrentes as $cpf => $conta) {
        echo $cpf . " ". $conta['titular'] . " " . $conta['saldo'] . PHP_EOL; 
    }