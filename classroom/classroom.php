<?php
require_once 'functions-classroom.php';

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
            "b" => 8.4,
            "a" => 7.2,
            "f" => 10,
            "d" => 6,
            "o" => null
        ],
        
        '2' => [

            "b" => 8.4,
            "a" => 7.2,
            "f" => 10,
            "d" => 6,
            "o" => null,
            "x" => 7.6,
            "c" => 5.3,
            "z" => null,
            "t"=> 3
        ]
    ];

    echo "Consulte a turma".PHP_EOL;
    consultaAluno($turma1 , $turma2);

    $novatos = viewNovatos($turma1,  $turma2);
    