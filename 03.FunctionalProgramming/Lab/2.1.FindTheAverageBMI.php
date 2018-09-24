<?php
    $people = [
        [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
        [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
        [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
        [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
    ];

    $bmiCalcAvg = function ($person, $result){
        $weight = intval($person['weight']);
        $height = floatval($person['height']);
        $result += $weight / ($height * $height);
        return $result;
    };

    $output = array_reduce($people, $bmiCalcAvg);

    print_r($output);

// DOESN'T WORK!!!