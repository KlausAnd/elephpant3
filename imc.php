<?php
    echo "\tIMC" . PHP_EOL;
    $peso = (double)readline();
    $altura = (double)readline();
    $imc = $peso / ($altura ** 2);
    if ($imc < 18.5) {
        echo "$imc abaixo". PHP_EOL;
    }
    elseif($imc < 25) {
        echo "$imc normal". PHP_EOL;
    }
    elseif($imc > 25 ) {
        echo "$imc acima". PHP_EOL;
    }