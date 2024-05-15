<?php

require "autoload.php";

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

    $endereco = new Endereco(readline('Cidade: '), readline('Rua: '), readline('Numero: '));
    $titular =  new Titular(new CPF(readline('CPF: ')), readline('Titular: '), $endereco);
    $conta = new Conta($titular, $endereco);

    $conta->deposita(1220);
    $conta->saque(200);
    echo $conta->getSaldo() . PHP_EOL;

    echo $titular->getCPF();

    echo PHP_EOL . Conta::numeroContas() . PHP_EOL;

    var_dump($conta);
