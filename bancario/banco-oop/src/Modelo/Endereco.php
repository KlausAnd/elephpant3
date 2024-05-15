<?php
namespace Alura\Banco\Modelo;

    class Endereco {
        public function __construct( private string $cidade, private string $rua, private string $numero) {
        }
        public function getCidade(): string {
            return $this->cidade;
        }
        public function getRua(): string{
            return $this->rua;
        }
        public function getNumero(): string {
            return $this->numero;
        }

    }