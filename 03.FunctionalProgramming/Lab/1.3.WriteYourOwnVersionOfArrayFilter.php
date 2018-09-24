<?php
    $animals = [
        [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
        [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
        [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
        [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
    ];

    $filter = function ($item){
        if ($item['type'] == 'dog' && $item['age'] < 8){
            return true;
        }else{
            return false;
        }
    };

    $dogsOutput = array_filter($animals, $filter);

    echo print_r($dogsOutput);