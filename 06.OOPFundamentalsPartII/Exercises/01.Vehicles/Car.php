<?php
namespace Vehicle;

class Car extends Vehicle
{
    public function __construct($fuelQuantity, $fuelLitersPerKm)
    {
        parent::__construct($fuelQuantity, $fuelLitersPerKm);
    }

    public function setFuelConsumption($fuelLitersPerKm)
    {
        $this->fuelConsumption = $fuelLitersPerKm + 0.9;
    }

    public function setRefuel($refuel)
    {
        $this->fuelConsumption += $refuel;
    }
}