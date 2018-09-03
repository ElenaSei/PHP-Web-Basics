<?php
    $speed = intval(readline());
    $zone = readline();

    $limit = getLimit($zone);
    $infraction = getInfraction($speed, $limit);

    echo $infraction;

    function getLimit($zone){
        switch ($zone){
            case 'motorway':
                $speedLimit = 130;
                break;
            case 'interstate':
                $speedLimit = 90;
                break;
            case 'city':
                $speedLimit = 50;
                break;
            case 'residential':
                $speedLimit = 20;
                break;
            default:
                echo "Not invalid Input";
                $speedLimit = 1000;
        }
        return $speedLimit;
    }

    function getInfraction($speed, $limit){
        $overSpeed = $speed - $limit;

        $result = "";
        if ($overSpeed > 40 ){
            $result = "reckless driving";
        }else if ($overSpeed > 20){
            $result = "excessive speeding";
        }else if ($overSpeed >= 0){
            $result = "speeding";
        }
        return $result;
    }