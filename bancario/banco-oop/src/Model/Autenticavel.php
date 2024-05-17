<?php
    namespace Alura\Banco\Modelo;
    require "autoload.php";

    interface Autenticavel{
        public function podeAutenticar(string $senha);
    }