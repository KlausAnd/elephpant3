<?php
    namespace Alura\Banco\Modelo\Conta;
    
    use Alura\Banco\Modelo\Pessoa;
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\CPF;
    abstract class Conta {

        /*readonly e promotion no construtor */
        public function __construct(readonly Titular $titular, private Endereco $endereco,  protected float $saldo  = 0) {
            echo "Conta criada" .PHP_EOL;
        }

        
        public function deposita(float $valor): void{   
            if($valor <= 0){ 
                echo "valor inválido" . PHP_EOL;
                return;
            }
            $this->saldo += $valor;
        }
        
        public function getSaldo(): float{
            return $this->saldo;
        }
        public function saca(float $valor): void{
            $tarifasaque = $valor * $this->tarifaPercentual();
            $valorsaque = $valor + $tarifasaque;    
            if($valorsaque > $this->saldo){
                echo "saldo insuficiente" . PHP_EOL;
                return;
            }
            $this->saldo-= $valorsaque;
        }
        abstract public function tarifaPercentual():float; 
    }