<?php
    $firstNum = floatval(fgets(STDIN));
    $secondNum = floatval(fgets(STDIN));

    $result = $firstNum + $secondNum;
    $result = round($result, 2);

    echo number_format($result, 2);