<?php
    namespace Alura\Banco\Service;

    use Alura\Banco\Modelo\Autenticavel;
    class Autenticador{
        public function login(Autenticavel $autenticavel, string $senha){
            if ($autenticavel->podeAutenticar($senha)){
                echo 'Acesso liberado.' . PHP_EOL;
                return;
            }
            echo 'Acesso negado.' . PHP_EOL;
        }
    }