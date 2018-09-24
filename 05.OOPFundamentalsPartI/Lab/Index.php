<?php
include "Vehicle.php";
include "Car.php";
include "Bicycle.php";

    // $myVehicle = new Vehicle(2, "orange");
    // $myVehicle->setDoors(4);
    // $myVehicle->setColor("blue");

    // print_r($myVehicle);

    $myCar = new Car(4, "Red", "Audi", "A4", 2016);

    $myCar->paint("Blue");
    print_r($myCar);

    $b1 = new Bicycle(2, "Red", "Drag", "ZH5", 2015, true);
    $b2 = new Bicycle(2, "White", "Cross", "ZH3", 2012, false);

    $b1->Ride();
    $b2->Stop();

    echo $b1;