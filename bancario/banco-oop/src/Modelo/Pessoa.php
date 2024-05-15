<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;
    class Pessoa{
        public function __construct(protected string $nome, protected CPF $cpf){
            $this->validaNome($nome);
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function getCPF(): string{
            return $this->cpf->getCPF();
        }

        private function validaNome($nome): void{
            if(strlen($nome) < 5){
                echo 'Nome precisa de 5 caracteres' . PHP_EOL;
                exit();
            }
        }
    }