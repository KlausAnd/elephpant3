<?php
namespace Alura\Banco\Modelo;
    class CPF{
        public function __construct(readonly string $cpf){
        }

        public function getCPF(): string{
            return $this->cpf;
        }
    }