<?php
include "iFerrari.php";
include "Ferrari.php";

$driver = readline();
$ferrari = new Ferrari($driver);
echo $ferrari;

$driver = readline();
$ferrari2 = new Ferrari($driver);
echo $ferrari2;