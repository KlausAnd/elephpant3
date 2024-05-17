<?php
    require "autoload.php";

use Alura\Banco\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Conta\Titular;


    echo "\tAutenticacao Banco" . PHP_EOL;

    $autenticador = new Autenticador ();

    $diretor = new Diretor( 
        new CPF('123.456.789-10'), 
        'Joao Mario', 
        10000
        );

    $gerente = new Gerente(
        new CPF('987.654.321-00'),
        'Mario Jose',
        5000
    );

    $titular = new Titular(
        new CPF('823.431.323-65'),
        'Luisa Maria',
        new Endereco('Chapeco','Centro', 'Metaleiros', '812')
    );
        
    $autenticador->login($diretor, 'admin');
    $autenticador->login($gerente, 'esqueci');
    $autenticador->login($titular, 'user');
