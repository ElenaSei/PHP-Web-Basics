<?php
    $str = fgets(STDIN);
    $letters = array();

    for ($i=0; $i < strlen($str); $i++) {
      $letter = $str[$i];
      if (isset($letters[$letter])) {
        $letters[$letter] += 1;
      }else {
        $letters[$letter] = 1;
      }
    }

    echo print_r($letters);
?>
