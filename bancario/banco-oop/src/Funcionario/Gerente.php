<?php

namespace Alura\Banco\Funcionario;

    class Gerente extends Funcionario{
        public function Bonificacao(){
            return $this->getSalario();
        }
    }