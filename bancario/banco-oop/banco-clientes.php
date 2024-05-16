<?php

require "autoload.php";

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};

    $endereco = new Endereco(readline('Cidade: '), readline('Rua: '), readline('Numero: '));
    $titular =  new Titular(new CPF(readline('CPF: ')), readline('Titular: '), $endereco);
    $conta = new ContaPoupanca($titular, $endereco);
    $conta->deposita(100);
    $conta->saca(10);
    echo $conta->getSaldo() . PHP_EOL;

    echo $titular->getCPF();

    var_dump($conta);
