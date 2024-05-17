<?php
namespace Alura\Banco\Modelo;
    final class CPF{
        public function __construct(readonly string $cpf){
        }

        public function getCPF(): string{
            return $this->cpf;
        }
    }