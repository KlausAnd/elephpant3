<?php
require_once './functions-classroom.php';

    $turma1 = [
        '1' => [
            "joao" => 8.4,
            "maria" => 7.2,
            "luis" => 10,
            "zeca" => 6,
            "lucas" => null
        ],
        
        '2' => [

            "joao" => 6,
            "maria" => 9.5,
            "luis" => 7,
            "zeca" => 8.4,
            "lucas" => 10,
            "marquinhos" => 7.6,
            "zezinho" => 5.3,
            "jorlan" => null,
            "dorival" => 3
        ]
    ];

    $turma2 = [
        '1' => [
            "bia" => 8.4,
            "apolo" => 7.2,
            "fernando" => 10,
            "mariana" => 6,
            "olinda" => null
        ],
        
        '2' => [

            "bia" => 8.4,
            "apolo" => 7.2,
            "fernando" => 10,
            "mariana" => 6,
            "olinda" => null,
            "eric carteado" => 7.6,
            "bob espuma" => 5.3,
            "bartolomeu simpson" => null,
            "morty sancho"=> 3
        ]
    ];

    echo "Consulte a turma".PHP_EOL;
    consultaAluno($turma1 , $turma2);

    $novatos = viewNovatos($turma2,  $turma1);

    echo PHP_EOL . "add aluno T1 - 2ºbim".PHP_EOL;
    $add = addAluno();
    $turma1[2] += $add;