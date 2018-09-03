<?php
    $num = intval(readline());
    $commands = explode(", ", readline());

    for ($i = 0; $i < count($commands); $i++){
        $command = $commands[$i];

        if ($command == "chop"){
            $num /= 2;
        }elseif ($command == "dice"){
            $num = sqrt($num);
        }elseif ($command == "spice"){
            $num += 1;
        }elseif ($command == "bake"){
            $num *= 3;
        }elseif ($command == "fillet"){
            $num -= $num * 0.2;
        }
        echo "$num\n";
    }