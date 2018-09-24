<?php
    class Math{
        public $a;
        public $b;

        function math_sum($a,$b){
            return $a+$b;
        }

        function math_div($a,$b){
            if ($this->math_check_if_zero($a) || $this->math_check_if_zero($b)){
                return "division by zero is not possible";
            }else{
                return $a / $b;
            }
        }

        function math_check_if_zero($x){
            if($x == 0){
                return true;
            }else{
                return false;
            }
        }
    }

    $calculateSum = new Math();
    $result1 = $calculateSum->math_sum(2, 3);

    $calculateDiv = new Math();
    $result2 = $calculateDiv->math_div(1, 2);

    echo $result1 . "\n";
    echo $result2;
