<?php
    class Titular{
        public function __construct(readonly Id $cpf, readonly string $nome){
            $this->validaNome($nome);
        }

        private function validaNome($nome): void{
            if(strlen($nome) < 5){
                echo 'Nome precisa de 5 caracteres' . PHP_EOL;
                exit();
            }
        }
    }