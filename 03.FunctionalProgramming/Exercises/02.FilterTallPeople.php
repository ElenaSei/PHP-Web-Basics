<?php
    $people = [
        ['name'=> 'John'  , 'height'=> 1.65],
        ['name'=> 'Peter' , 'height'=> 1.85],
        ['name'=> 'Silvia', 'height'=> 1.69],
        ['name'=> 'Martin', 'height'=> 1.82]
    ];

    $filterTall = function ($person){
        if ($person['height'] > 1.8){
            return true;
        }else{
            return false;
        }
    };

    $output = array_filter($people, $filterTall);

    print_r($output);
