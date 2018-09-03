<?php
    $arr = explode(', ', readline());

    $desiredFinal = intval($arr[0]);


    for ($i = 1; $i < count($arr); $i++){
        $chunk = intval($arr[$i]);

        echo "Processing chunk $chunk microns\n";

        $cut = 0;
        $lap = 0;
        $grind = 0;
        $etch = 0;
        $xRay = 0;
        while ($chunk > $desiredFinal){
            if (($chunk / 4) >= $desiredFinal){
                $chunk /= 4;
                $cut++;
            }elseif ($chunk - ($chunk * 0.2) >= $desiredFinal){
                $chunk -= ceil($chunk * 0.2);
                $lap++;
            }elseif ($chunk - 20 >= $desiredFinal){
                $chunk -= 20;
                $grind++;
            }elseif ($chunk - 2 >= $desiredFinal){
                $chunk -= 2;
                $etch++;
            }elseif ($chunk + 1 >= $desiredFinal && $xRay < 1){
                $chunk += 1;
                $xRay++;
            }
        }

        if ($cut > 0){
            echo "Cut x$cut\n";
            echo "Transporting and washing\n";
        }
        if ($lap > 0){
            echo "Lap x$lap\n";
            echo "Transporting and washing\n";
        }
        if ($grind > 0){
            echo "Grind x$grind\n";
            echo "Transporting and washing\n";
        }
        if ($etch > 0){
            echo "Etch x$etch\n";
            echo "Transporting and washing\n";
        }
        if ($xRay > 0){
            echo "X-ray x$xRay\n";
        }
        echo "Finished crystal $chunk microns\n";
    }