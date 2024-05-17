<?php
namespace Alura\Banco\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
    
    abstract class Funcionario extends Pessoa {
        
        public function __construct(CPF $cpf, string $nome, private float $salario) {
            parent::__construct($nome, $cpf);
        }

            public function getSalario(): float{
                return $this->salario;
            }

            public function recebeAumento(float $valorAumento){
                if ($valorAumento < 0){
                    echo 'valor deve ser positivo.';
                    return;
                    }
                    $this->salario += $valorAumento;
                }

            abstract function Bonificacao();
    }