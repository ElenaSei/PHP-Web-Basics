<?php
    $animals = [
        [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
        [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
        [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
        [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
    ];

    $filter = function ($item, $age){
        if ($item['type'] == 'dog' && $age == "young" && $item['age'] < 8){
            return true;
        }else{
            return false;
        }
    };

    $oldDogs = array_filter($animals, $filter($item, "old"));
    $youngDogs = array_filter($animals, $filter($item, "young"));

    echo print_r($dogsOutput);

    // DOESN'T WORK!