<?php
    $arr = explode(' ', readline());

    $count = 1;
    $maxCount = 0;
    $bestEnd = -1;

    for ($i = 0; $i < count($arr) - 1; $i++){
        if ($arr[$i] == $arr[$i + 1]){
            $count++;
            if ($count > $maxCount){
                $maxCount = $count;
                $bestEnd = $i + 1;
            }
        }else{
            $count = 1;
        }
    }

    for ($i = $bestEnd - $maxCount + 1; $i <= $bestEnd; $i++){
        echo "$arr[$i]" . " ";
    }