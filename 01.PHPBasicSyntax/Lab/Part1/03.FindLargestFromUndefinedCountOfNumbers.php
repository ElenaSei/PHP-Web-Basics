<?php
    $numbers = [];
    while ($num = intval(fgets(STDIN))) {
      $numbers[] = $num;
    }
    echo "Max: " . max($numbers);
?>
