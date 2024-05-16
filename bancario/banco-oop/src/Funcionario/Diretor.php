<?php
namespace Alura\Banco\Funcionario;

    class Diretor extends Funcionario {
        public function Bonificacao(){
            return $this->getSalario()*2;
        }

        public function auth(string $senha): bool{
            return $senha === 'admin';
        }
    }