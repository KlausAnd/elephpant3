<?php
    require_once 'functions-banco.php';
    echo "\tContas Bancarias" . PHP_EOL;

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
            $mensagem = wrap("$cpf $conta[titular] $conta[saldo]");
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