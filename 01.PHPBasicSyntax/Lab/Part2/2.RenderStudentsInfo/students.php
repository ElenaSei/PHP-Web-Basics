<?php
    if (isset($_GET['filter'])) {
      $delimiter = $_GET['delimiter'];

      $names = $_GET['names'];
      $names = explode($delimiter, $names);
      $ages = $_GET['ages'];
      $ages = explode($delimiter, $ages);
    }
    include "students_frontend.php";
?>
