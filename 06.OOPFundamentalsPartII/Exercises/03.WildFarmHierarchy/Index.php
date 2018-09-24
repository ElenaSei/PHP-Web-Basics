<?php
require 'Animal.php';
require 'Food.php';
require 'Mammal.php';
require 'Vegetable.php';
require 'Meat.php';
require 'Mouse.php';
require 'Felime.php';
require 'Zebra.php';
require 'Cat.php';
require 'Tiger.php';

$command = readline();
$row = 0;

while ($command != "End"){
    $command = explode(' ', $command);
    if ($row % 2 == 0){
        $animalType = $command[0];
        $animalName = $command[1];
        $animalWeight = $command[2];
        $animalLivingRegion = $command[3];

        if ($animalType == "Cat"){
            $catBreed = $command[4];
            $animal = new Cat($animalType, $animalName, $animalWeight, $animalLivingRegion, $catBreed);
        }elseif ($animalType == "Mouse"){
            $animal = new Mouse($animalType, $animalName, $animalWeight, $animalLivingRegion);
        }elseif ($animalType == "Tiger"){
            $animal= new Tiger($animalType, $animalName, $animalWeight, $animalLivingRegion);
        }elseif ($animalType = "Zebra"){
            $animal= new Zebra($animalType, $animalName, $animalWeight, $animalLivingRegion);
        }

    }else{
        $foodType = $command[0];
        $foodQuantity = $command[1];

        if ($foodType == "Vegetable"){
            $food = new Vegetable($foodQuantity);
        }else{
            $food = new Meat($foodQuantity);
        }
    }
    if (isset($food)){
        $animal->makeSound();
        $animal->eatFood($food);
        echo $animal;
    }

    $command = readline();
    $row++;
}