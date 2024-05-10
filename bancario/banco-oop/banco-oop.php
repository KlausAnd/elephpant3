<?php
    require_once "./src/Conta.php";
    require_once "./src/Titular.php";
    require_once "./src/Id.php";

    $titular =  new Titular((new Id($cpf = readline('CPF: '))), $titular = readline('Titular: '));
    $conta = new Conta($titular);
    
    $conta->deposita(1220);
    $conta->saque(200);
    echo $conta->getSaldo() . PHP_EOL;

    echo Conta::numeroContas() . PHP_EOL;

    var_dump($conta);
