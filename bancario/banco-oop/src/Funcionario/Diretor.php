<?php
namespace Alura\Banco\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

    class Diretor extends Funcionario implements Autenticavel{
        public function Bonificacao(){
            return $this->getSalario()*2;
        }

        public function podeAutenticar(string $senha){
            return $senha === 'admin';
        }
    }