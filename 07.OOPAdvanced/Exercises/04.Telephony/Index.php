<?php
include "iCallOthers.php";
include "iBrowsingInWeb.php";
include "Smartphone.php";

$phoneNums = explode(' ', readline());
$sites = explode(' ', readline());

$callPhones = new Smartphone();
$callPhones->callOthers($phoneNums);

$visitSites= new Smartphone();
$visitSites->browsInWeb($sites);