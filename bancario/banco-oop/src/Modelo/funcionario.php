<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

    class Funcionario extends Pessoa {
        public function __construct(CPF $cpf, string $nome, private string $cargo) {
            parent::__construct($nome, $cpf);
            $this->cargo = $cargo;
        }

        public function getCargo(): string {
            return $this->cargo;
        }
    }