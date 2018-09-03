<?php
    $input = readline();

    $num = [];
    for ($i = 0; $i < strlen($input); $i++){
        $num[] = intval($input[$i]);
    }

    while (array_sum($num) / count($num) < 5){
        $num[] = 9;
    }

    echo implode('', $num);