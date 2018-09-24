<?php
namespace BorderControl;
include 'iBuyer.php';
include 'iControl.php';
include 'Citizen.php';
include 'Rebel.php';

$numOfPeople = readline();
$arrObj = [];

for ($i = 0; $i < $numOfPeople; $i++){
    $input = explode(' ', readline());

    if (count($input) == 3){
        $arrObj[] = new Rebel($input[0]);
    }else{
        $arrObj[] = new Citizen($input[2], $input[3], $input[0]);
    }
}

$input = readline();

while ($input != "End"){
    foreach ($arrObj as $k=>$obj){
        if ($obj->getName() == $input){
            $obj->buyFood();
        }
    }

    $input = readline();
}

$totalFood = 0;
foreach ($arrObj as $k=>$obj){
    $totalFood += $obj->getFood();
}

echo "$totalFood units food";