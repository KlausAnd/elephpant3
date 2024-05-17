<?php
    namespace Alura\Banco\Modelo\Conta;

    class ContaPoupanca extends Conta{

        public function tarifaPercentual():float {
            return 0.03;
        }

    }