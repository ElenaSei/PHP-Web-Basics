<?php
namespace BorderControl;
include "iControl.php";
include "Robot.php";
include "Citizen.php";


$arrObj = [];
$input = readline();

while ($input != "End"){
    $input = explode(' ', $input);

    if (count($input) == 3){
        $arrObj[] = new Citizen($input[2], 0);
    }else{
        $arrObj[] = new Robot($input[1]);
    }
    $input = readline();
}

$num = readline();
foreach ($arrObj as $k=>$obj){
    $obj->checkId($num);
}