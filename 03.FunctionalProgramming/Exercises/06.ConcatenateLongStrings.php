<?php
    $input = ['Hello '
        , 'there.'
        , 'This is just another long string'
        , 'that would pass the check.'
        , ' but'
        ,' this'
        , ' will'
        ,' not'
        , 'pass it.'];

    $concatLongStr = function ($concatLongStr, $input, $above = 20, $result = [], $count = 0){
        if ($count < count($input)){
            if (strlen($input[$count]) >= $above) {
                $result[] = $input[$count];
                return $concatLongStr($concatLongStr, $input, $above = 20, $result, $count + 1);
                }else{
                return $concatLongStr($concatLongStr, $input, $above = 20, $result,  $count + 1);
            }
        }else{
            return $result;
        }
    };

    $output = $concatLongStr($concatLongStr, $input, $above = 20, $result = [],  $count = 0);
    echo implode(', ', $output);


    /*
    $above = 20;
    $concatLongStr = array_reduce($input, function ($carry, $item) use($above){
        if (strlen($item) >= $above){
            $carry .= $item . ', ';
            return $carry;
        }
        else{
            return $carry;
        }
    });

    echo trim($concatLongStr, ', ');
    */
