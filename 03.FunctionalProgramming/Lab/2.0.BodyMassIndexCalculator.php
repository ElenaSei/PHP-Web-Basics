<?php
    $people = [
        [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
        [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
        [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
        [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
    ];

    $bodyMassCalculator = function ($person){
        $weight = intval($person['weight']);
        $height = floatval($person['height']);
        $result = $weight / ($height * $height);
        return $result;
    };

    $output = array_map($bodyMassCalculator, $people);

    echo print_r($output);

