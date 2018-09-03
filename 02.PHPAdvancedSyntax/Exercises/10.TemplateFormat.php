<?php
    $input = explode(', ', readline());

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo "<quiz>\n";

    for($i = 0; $i < count($input); $i += 2){
        echo "  <question>\n";
        echo "    $input[$i]\n";
        echo "  </question>\n";
        echo "  <answer>\n";
        echo "     " . $input[$i+1] . "\n";
        echo "  </answer>\n";
    }

    echo "</quiz>";
