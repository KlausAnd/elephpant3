<?php
require_once 'functions-arrays.php';

    $notas1bi = [

        "joao" => 8.4,
        "maria" => 7.2,
        "luis" => 10,
        "zeca" => 6,
        "lucas" => null
    ];
    
    $notas2bi = [

        "joao" => 6,
        "maria" => 9.5,
        "luis" => 7,
        "zeca" => 8.4,
        "lucas" => 10,
        "marquinhos" => 7.6,
        "zezinho" => 5.3,
        "jorlan" => null,
        "dorival" => 3
    ];


    echo "aluno matriculado no 1º bimestre?".PHP_EOL;
    consultaAluno($notas1bi);

    $novatos = viewNovato($notas2bi, $notas1bi);
    