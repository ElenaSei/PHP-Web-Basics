<?php
    $input = 'Hello, there! ';

    $repeatString = function ($repeatString, $nTimes, $input, $count, $result = ""){
        if ($count < $nTimes)
            return $repeatString($repeatString,$nTimes, $input, $count+1, $result . $input);
        else
            return $result . $input;
    };

    echo $repeatString($repeatString, 3, $input, 1);