<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

    class Titular extends Pessoa implements Autenticavel {
        public function __construct(CPF $cpf, string $nome, protected Endereco $endereco){
            parent::__construct($nome, $cpf); 
            $this->endereco = $endereco;
        }

        public function podeAutenticar(string $senha){
            return $senha === 'user';
        }
    }