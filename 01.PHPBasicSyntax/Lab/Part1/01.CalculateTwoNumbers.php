<?php
    $operation = $argv[1];

    $numberOne = intval(fgets(STDIN));
    $numberTwo = intval(fgets(STDIN));

    if ($operation == "sum") {
      echo " == " . ($numberOne + $numberTwo) . "\n";
    } elseif ($operation == "substract") {
      echo " == " . ($numberOne - $numberTwo) . "\n";
    } else {
      echo " == Wrong operation supplied\n";
    }
?>
