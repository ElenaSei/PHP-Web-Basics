<?php
    $array = [  ['sum', 12, 133],
                ['subtract', 3, 3],
                ['sum', 1, 2],
                ['divide', 100, 0],
                ['divide', 100, 'PP'],
                ['sum', 'P123', 123]
                ];

    $opSum = function ($a, $b){
        return $a + $b;
    };

    $opSubtract = function ($a, $b){
        return $a - $b;
    };

    $opDivide = function ($a, $b){
        if ($b == 0){

        }else {
            return $a / $b;
        }
    };

    $opMultiply = function ($a, $b){
        return $a * $b;
    };

    $opErrors = function ($a, $b, $op) use($opDivide){
        if ($a < 0 || $a > 100 ){
            return 'out_of_range';
        }elseif (!is_numeric($a)){
            return 'op1_not_numeric';
        }elseif ($b < 0 || $b > 100 ){
            return 'out_of_range';
        }elseif (!is_numeric($b)){
            return 'op2_not_numeric';
        }elseif ($op == "divide" && $b == 0){
            return 'division_by_zero';
        }else{
            return false;
        }
    };

    $simpleCalc = function ($simpleCalc, $array, $i = 0, $output = []) use ($opSum, $opSubtract, $opDivide, $opMultiply, $opErrors){
        if ($i < count($array)){
            $op = $array[$i][0];
            $a = $array[$i][1];
            $b = $array[$i][2];
            if ($opErrors($a, $b, $op)){
                $output[] = $opErrors($a, $b, $op);
                return $simpleCalc($simpleCalc, $array, $i + 1, $output);
            }
            if ($op == 'sum'){
                $output[] = $opSum($a, $b);
            }elseif ($op == 'subtract'){
                $output[] = $opSubtract($a, $b);
            }elseif ($op == 'divide'){
                $output[] = $opDivide($a, $b);
            }elseif($op == 'multiply'){
                $output[] = $opMultiply($a, $b);
            }
            return $simpleCalc($simpleCalc, $array, $i + 1, $output);
        }else{
            return $output;
        }
    };

    $result = $simpleCalc($simpleCalc, $array, $i = 0, $output = []);

    echo implode(', ', $result);