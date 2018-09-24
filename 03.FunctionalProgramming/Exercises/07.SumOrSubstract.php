<?php
    $array = [  ["sum", 12, 13],
                ["subtract", 3, 3],
                ["sum", 1, 2 ]];

    $opSum = function ($a, $b){
        return $a + $b;
    };

    $opSubtract = function ($a, $b){
        return $a - $b;
    };

    $simpleCalc = function ($simpleCalc, $array, $i = 0, $output = []) use ($opSum, $opSubtract){
        if ($i < count($array)){
            $op = $array[$i][0];
            $a = $array[$i][1];
            $b = $array[$i][2];
            if ($a < 0 || $a > 100 || $b < 0 || $b > 100 ){
                $output[] = 'error';
                return $simpleCalc($simpleCalc, $array, $i + 1, $output);
            }
            if ($op == 'sum'){
                $output[] = $opSum($a, $b);
                return $simpleCalc($simpleCalc, $array, $i + 1, $output);
            }else{
                $output[] = $opSubtract($a, $b);
                return $simpleCalc($simpleCalc, $array, $i + 1, $output);
            }
        }else{
            return $output;
            }
    };

    $result = $simpleCalc($simpleCalc, $array, $i = 0, $output = []);

    echo implode(', ', $result);