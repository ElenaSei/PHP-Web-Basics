<?php
    $input = readline();

    echo isPalindrome($input);

    function isPalindrome($input){
        $reversed = strrev($input);

        if ($reversed == $input){
            $result = "true";
        }else{
            $result = "false";
        }
        return $result;
    }
