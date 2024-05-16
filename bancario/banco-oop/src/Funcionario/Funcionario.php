<?php
namespace Alura\Banco\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

    class Funcionario extends Pessoa {
        
        public function __construct(CPF $cpf, string $nome, private float $salario) {
            parent::__construct($nome, $cpf);
        }

            public function getSalario(): float{
                return $this->salario;
            }
        
            public function Bonificacao(){
                return $this->salario *0.1;
        }
    }