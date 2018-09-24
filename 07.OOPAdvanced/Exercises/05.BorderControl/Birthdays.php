<?php
namespace BorderControl;
include "iControl.php";
include "Robot.php";
include "Citizen.php";
include "Pet.php";


$arrObj = [];
$input = readline();

while ($input != "End"){
    $input = explode(' ', $input);

    if ($input[0] == 'Citizen'){
        $arrObj[] = new Citizen($input[3], $input[4]);
    }elseif ($input[0] == 'Pet'){
        $arrObj[] = new Pet($input[2]);
    }
    $input = readline();
}

$date = readline();

foreach ($arrObj as $k=>$obj){
    $obj->checkBday($date);
}