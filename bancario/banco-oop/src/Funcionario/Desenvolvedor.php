<?php
namespace Alura\Banco\Funcionario;

    class Desenvolvedor extends Funcionario {
        
        public function sobeNivel(){
            return $this->recebeAumento($this->getsalario()*0.75);
        } 

        public function Bonificacao(){
            return 500;
        }
    }