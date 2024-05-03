<?php
require_once 'functions-arrays.php';

$notas = [

        "joao" => 8.4,
        "maria" => 7.2,
        "luis" => 10,
        "zeca" => 6,
        "lucas" => null
    ];
    

    echo "aluno existe?".PHP_EOL;
    $nome = readline('nome: ');
    $consulta = consultaAluno($notas, $nome);
    echo $consulta;

    echo "alguem nao fez prova?" .PHP_EOL;
    if(in_array(null , $notas) == 1){
        echo "sim".PHP_EOL;
    };
    
    if (in_array(null, $notas)) {
        $repetente = array_search(null , $notas); //achar key => null
        echo $repetente . ' não fez e repetiu'. PHP_EOL;
    }