<?php
    function consultaAluno(array $notasdobimestre)
    {
        $nome = readline('nome: ');
        if(array_key_exists($nome, $notasdobimestre) == false ){
            echo "sem matricula encontrada no 1ºbimestre" . PHP_EOL;
        }
        else{
        echo "matriculado no 1ºbimestre" . PHP_EOL;
        }
    }

    function viewNovato(array $bimestre1, array $bimestre2)
    {
        echo "\tLista de alunos novos: ". PHP_EOL;
        $alunosNovos = array_diff_key( $bimestre1, $bimestre2 );
        foreach($alunosNovos as $novatos => $nota){
            if($nota == null){
                echo "\t$novatos, não fez prova". PHP_EOL;
                continue;
            }
            echo "\t$novatos, nota $nota".PHP_EOL;
        }
        return $alunosNovos;
    }