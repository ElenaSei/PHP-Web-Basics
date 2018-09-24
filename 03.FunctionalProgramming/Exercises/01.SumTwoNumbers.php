<?php
    $num1 = floatval(readline());
    $num2 = floatval(readline());

    $sumTwo = function ($num1, $num2){
        return $num2 + $num1;
    };

    echo $sumTwo($num1, $num2);