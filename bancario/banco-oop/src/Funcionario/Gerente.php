<?php

namespace Alura\Banco\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

    class Gerente extends Funcionario implements Autenticavel{
        public function Bonificacao(){
            return $this->getSalario();
        }

        public function podeAutenticar(string $senha){
            return $senha === 'manager';
        }
    }