<?php
    namespace Alura\Banco\Modelo\Conta;
    
    class ContaCorrente extends Conta{
        

        public function tarifaPercentual(): float{
                return 0.05;        
            }
        
        public function transfere(conta $destino, float $valor): void{
            if($this->saldo < $valor){
                echo "transferencia nao realizada";
                return;
            }
            $this->saca($valor);
            $destino->deposita($valor);
            }
    }