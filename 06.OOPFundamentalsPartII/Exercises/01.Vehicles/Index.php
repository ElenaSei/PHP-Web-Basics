<?php
use Vehicle\Car;
use Vehicle\Truck;

include 'Vehicle.php';
include 'Car.php';
include 'Truck.php';

$input = explode(' ', readline());
$fuelQuantityCar = $input[1];
$fuelLitersPerKmCar = $input[2];
$car = new Car($fuelQuantityCar, $fuelLitersPerKmCar);

$input = explode(' ', readline());
$fuelQuantityTruck = $input[1];
$fuelLitersPerKmTruck = $input[2];
$truck = new Truck($fuelQuantityTruck, $fuelLitersPerKmTruck);

$numOfCommands = readline();

for ($i = 0; $i < $numOfCommands; $i++){
    $input = explode(' ', readline());

    $command = $input[0];
    $vehicle = $input[1];

    if ($command == "Drive"){
        $distance = $input[2];
        if ($vehicle == "Car"){
            $car->setDrivingDistance($distance, $vehicle);
        }elseif ($vehicle == "Truck"){
            $truck->setDrivingDistance($distance, $vehicle);
        }
    }else if ($command == "Refuel"){ // Doesn't work!!!
        $refuel = $input[2];
        if ($vehicle == "Car"){
            $car->setRefuel($refuel);
        }elseif ($vehicle == "Truck"){
            $truck->setRefuel($refuel);
        }
    }
}

echo "Car: " . $car->getFuelQuantity() . "\n";
echo "Truck: " . $truck->getFuelQuantity() . "\n";