<?php
    echo "\tTabuada" .PHP_EOL ;
    $num = (int)readline('Digite um número: ');
    for ($i = 0; $i <= 9; $i++){
        $res = $num * $i;
        echo $res . PHP_EOL; 
    }

