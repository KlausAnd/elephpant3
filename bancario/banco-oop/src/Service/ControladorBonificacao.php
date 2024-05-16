<?php
    namespace Alura\Banco\Service;

    use Alura\Banco\Funcionario\Funcionario;
    class ControladorBonificacao{
        public function __construct(private float $totalbonificacoes = 0){
        }
        public function addBonificacao(Funcionario $funcionario){
            $this->totalbonificacoes += $funcionario->Bonificacao();
        }
        public function getTotalbonificacoes():float{
            return $this-> totalbonificacoes;
        }
    }