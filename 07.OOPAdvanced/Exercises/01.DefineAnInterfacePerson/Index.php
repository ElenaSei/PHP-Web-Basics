<?php
include "Person.php";
include "Identifiable.php";
include "Birthable.php";
include "Citizen.php";

$myCitizen = new Citizen("Peter", 25, 7706126789, "12.06.1977");

echo $myCitizen;