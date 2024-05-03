<?php
    function consultaAluno(array $turma1, array $turma2): void
    {
        $nome = readline('nome: ');
        if(array_key_exists($nome, $turma1[2]) == true ){
            echo "matriculado na turma 1" . PHP_EOL;
            return;
        }
        elseif(array_key_exists($nome, $turma2[2])== true){
            echo "matriculado na turma 2" . PHP_EOL;
            return;
        }
        echo "não encontrado". PHP_EOL;
    }

    function viewNovatos(array $turma2, array $turma1): array
    {
        echo "\tLista de alunos novos: ". PHP_EOL;
        $turma2Novos = array_diff_key($turma2['2'], $turma2['1']);
        $turma1Novos = array_diff_key($turma1['2'], $turma1['1']);
        $alunosNovos = array_merge($turma1Novos, $turma2Novos);
        foreach($alunosNovos as $novatos => $notas){
            echo "\t$novatos" . PHP_EOL;
        }
        return $alunosNovos;
    }

    function addAluno()
    {
        $nome = readline("Digite o nome: ");
        $nota = (float)readline("Digite a nota: ");
        return [$nome => $nota];
    }