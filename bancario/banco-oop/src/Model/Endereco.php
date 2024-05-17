<?php
namespace Alura\Banco\Modelo;

    final class Endereco {
        public function __construct( private string $cidade, private string $bairro, private string $rua, private string $numero) {
        }

        public function __toString(): string {
            return "{$this->cidade}, {$this->rua}, nº {$this->numero}";  
        }

    }