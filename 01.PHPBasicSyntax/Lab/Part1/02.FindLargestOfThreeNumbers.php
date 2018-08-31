<?php
    $numberOne = intval(fgets(STDIN));
    $numberTwo = intval(fgets(STDIN));
    $numberThree = intval(fgets(STDIN));

    $largestFromOneTwo = max($numberOne, $numberTwo);
    $largest = max($largestFromOneTwo, $numberThree);

    echo "Max: " . $largest . "\n";
?>
