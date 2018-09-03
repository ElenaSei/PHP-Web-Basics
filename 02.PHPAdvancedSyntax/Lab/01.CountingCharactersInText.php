<?php
    $text = strtolower(readline());
    $text = str_replace(' ', '', $text);

    $array = [];
    for ($i = 0; $i < strlen($text); $i++){
        if (!isset($array[$text[$i]])){
            $array[$text[$i]] = 0;
        }
        $array[$text[$i]] += 1;
    }

    print_r($array);