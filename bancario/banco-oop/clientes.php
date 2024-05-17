<?php

namespace Banco\Clientes;

require "autoload.php";

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};

    $adress = new Endereco(
        'Rio de Janeiro',
        'Jardim das Rosas',
        'Flor Maribalda', 
        '230'
    );
    
    $owner = new Titular(
        new CPF('391.432.765-42'),
        'Joao das Gracas',
        $adress
    );

    $contaDiaria = new ContaCorrente($owner, $adress);

    $contaDiaria->deposita(100);
    $contaDiaria->saca(10); //Aplica taxa correntista 5%
    echo 'saldo atual' . ' - ' . $contaDiaria->getSaldo() . PHP_EOL;

    echo $owner->getNome() . ' - '. $adress . PHP_EOL;