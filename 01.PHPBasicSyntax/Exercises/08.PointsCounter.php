<?php
    $teams = [];
    $teamsPoints = [];

    while(($input = readline()) != "Result"){
        $input = explode('|', $input);

        $input[0] = preg_replace('/%?@?\$?\*?/', '', $input[0]);
        $input[1] = preg_replace('/%?@?\$?\*?/', '', $input[1]);
        $team = "";
        $player = "";
        $points = intval($input[2]);

        if (ctype_upper($input[0])){
            $team = $input[0];
            $player = $input[1];
        }else{
            $team = $input[1];
            $player = $input[0];
        }

        if (!isset($teams[$team])){
            $teams[$team][$player] = 0;
            $teamsPoints[$team] = 0;
        }
        $teams[$team][$player] = $points;
        $teamsPoints[$team] += $points;
    }

    arsort($teamsPoints);

    foreach ($teamsPoints as $key => $value){
        echo $key . " => " . "$value" . "\n";

        arsort($teams[$key]);
        reset($teams[$key]);
        $player = key($teams[$key]);

        echo "Most points scored by $player\n";
    }




