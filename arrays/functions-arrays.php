<?php
    function consultaAluno(array $notas, string $nome){
        if(array_key_exists($nome, $notas) == false ){
            echo "$nome nao existe" . PHP_EOL;
        }
        else{
        echo "$nome existe" . PHP_EOL;
        }
    }