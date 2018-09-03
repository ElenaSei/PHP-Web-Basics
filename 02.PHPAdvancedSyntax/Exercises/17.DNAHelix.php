<?php
    $length = intval(readline());

    $symbols = "ATCGTTAGGG";
    $bool = true;
    $counter = 0;
    for ($i = 1; $i <= $length; $i++){
        if ($i % 2 == 0){
            echo '*' . $symbols[$counter++] . '--' . $symbols[$counter++] . "*\n";
        } elseif ($bool){
            echo '**' . $symbols[$counter++] . $symbols[$counter++] . "**\n";
            $bool = false;
        } else{
            echo $symbols[$counter++] . '----' . $symbols[$counter++] . "\n";
            $bool = true;
        }

        if ($counter >= strlen($symbols)){
            $counter = 0;
        }
    }