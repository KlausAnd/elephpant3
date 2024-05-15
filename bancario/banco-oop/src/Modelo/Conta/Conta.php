<?php
    namespace Alura\Banco\Modelo\Conta;

    use Alura\Banco\Modelo\Pessoa;
    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\CPF;
    class Conta {
        private static $numeroContas;

        /*readonly e promotion no construtor */
        public function __construct(readonly Titular $titular, private Endereco $endereco,  private float $saldo  = 0) {
            self::$numeroContas ++;
            echo "Conta criada" .PHP_EOL;
        }

        public function saque(float $valor): void{
            if($valor > $this->saldo){
                echo "saldo insuficiente" . PHP_EOL;
                return;
            }
            $this->saldo -= $valor;
            echo "saque realizado". PHP_EOL;
        }

        public function deposita(float $valor): void{
            if($valor <= 0){ 
                echo "valor inválido" . PHP_EOL;
                return;
            }
            $this->saldo += $valor;
            echo "depósito realizado" . PHP_EOL;
        }

        public function transfere(conta $origem, float $valor): void{
            if($this->saldo < $valor){
                echo "transferencia nao realizada";
                return;
            }
            $origem->saldo += $valor;
            $this->saldo -= $valor;
        }

        public function getSaldo(): float{
            return $this->saldo;
        }

        public static function numeroContas():int{
            return self::$numeroContas;
        }
        
        public function __destruct(){
            self::$numeroContas --;
        }
    }