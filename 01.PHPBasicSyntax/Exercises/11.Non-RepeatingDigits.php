<?php
    $input = readline();

    $result = 0;
    $array = [];
    for ($i = 1; $i <= intval($input[0]); $i++){
        for ($j = 0; $j <= 9; $j++){
            for ($k = 0; $k <= 9; $k++){
                $result = $i . $j . $k;

                if ($i != $j && $i != $k && $j != $k && $result <= intval($input)){
                    $array[] = $result;
                }
            }
        }
    }

    if (empty($array)){
        echo "no";
    }else{
        echo implode(", ", $array);
    }